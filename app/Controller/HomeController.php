<?php
require_once __DIR__ . '/../Model/Member.php';
require_once __DIR__ . '/../Model/Upmenu.php';
require_once __DIR__ . '/../Model/Nininote.php';

class HomeController
{
    public function login()
    {
        $email = $_POST['emailId'] ?? '';
        $password = $_POST['user_pw'] ?? '';

        if (empty($email) || empty($password)) {
            echo json_encode(['success' => false, 'message' => '모든 필드를 입력하세요.']);
            return;
        }

        require_once '../app/Model/Member.php';
        $userModel = new Member();

        $user = $userModel->getMemByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['member_info'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'name' => $user['name'] ?? ''
            ];
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => '이메일 또는 비밀번호가 일치하지 않습니다.']);
        }
    }



    public function index()
    {
        session_start();

        // 메뉴 불러오기
        $upmenu = Upmenu::getAllUpmenu();

        // 로그인 상태 확인
        $member_info = isset($_SESSION['user_id']) ? [
            'id' => $_SESSION['user_id'],
            'email' => $_SESSION['user_email']
        ] : false;
        // 필요하면 모든 유저 가져오기
        // $member = Member::getAllUsers();


        // YouTube 영상 가져오기
        $url = "https://www.youtube.com/feeds/videos.xml?channel_id=UCtoQMyTV-BsvAHdPiHPJbbg";
        $curl_connection = curl_init($url);
        curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_connection, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $result = curl_exec($curl_connection);
        curl_close($curl_connection);

        $video_list = simplexml_load_string($result);
        $entries = $video_list->entry;

        $videos = [];
        foreach ($entries as $entry) {
            $video_id = str_replace('yt:video:', '', $entry->id);
            $videos[] = [
                'id' => $video_id,
                'title' => (string) $entry->title,
                'link' => (string) $entry->link['href'],
                'published' => (string) $entry->published,
            ];
        }

        // 니니노트 목록 가져오기
        $nininote_list = Nininote::getAllNotesWithThumbnail();

        require_once __DIR__ . '/../View/home.php';
    }



    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /home");
        exit;
    }
}