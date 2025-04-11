const days = ["일", "월", "화", "수", "목", "금", "토"];
const months = ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"];
let currentDate = new Date();
let year = currentDate.getFullYear();
let month = currentDate.getMonth();
let today = currentDate.getDate(); // 오늘 날짜

function updateCalendar() {
    const monthDisplay = document.getElementById("month");
    const yearDisplay = document.getElementById("year");
    monthDisplay.textContent = months[month];
    yearDisplay.textContent = year + "년";

    const calendarBody = document.getElementById("calendar-body");
    calendarBody.innerHTML = ""; // Clear previous cells

    // Get the first day of the month and the last date of the month
    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

    let dateNum = 1;

    // Fill in the days
    for (let i = 0; i < 6; i++) { // 6 rows (max for a calendar)
        const row = document.createElement("tr");
        for (let j = 0; j < 7; j++) { // 7 days
            const cell = document.createElement("td");
            if (i === 0 && j < firstDayOfMonth) {
                cell.textContent = ""; // Empty cell for days before the first day of the month
            } else if (dateNum > lastDateOfMonth) {
                cell.textContent = ""; // Empty cell for days after the last date of the month
            } else {
                cell.textContent = dateNum;
                cell.onclick = function () {
                    selectDate(cell);
                };

                // 오늘 날짜 강조 표시
                if (dateNum === today && year === currentDate.getFullYear() && month === currentDate.getMonth()) {
                    cell.classList.add("today"); // 오늘 날짜에 클래스 추가
                }
                dateNum++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
    }
}

function selectDate(cell) {
    const selectedCell = document.querySelector(".selected");
    if (selectedCell) {
        selectedCell.classList.remove("selected");
    }
    cell.classList.add("selected");
    // alert(`선택된 날짜: ${cell.textContent}일`);
}

function prev() {
    month--;
    if (month < 0) {
        month = 11;
        year--;
    }
    updateCalendar();
}

function next() {
    month++;
    if (month > 11) {
        month = 0;
        year++;
    }
    updateCalendar();
}

// Initialize calendar
updateCalendar();


document.addEventListener('DOMContentLoaded', function () {
    function convertTime() {
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();
        var hours = now.getHours().toString().padStart(2, '0'); // 2자리로 표시
        var minutes = now.getMinutes().toString().padStart(2, '0'); // 2자리로 표시
        var seconds = now.getSeconds().toString().padStart(2, '0'); // 2자리로 표시

        // 개행 처리를 위해 div 요소를 사용
        return '<div>' + hours + '시' + minutes + '분' + seconds + '초</div>';
    }
    // '<div>' + year + '년' + month + '월' + date + '일</div>' +
    function updateTime() {
        var currentTime = convertTime();
        document.querySelector('.nowtime').innerHTML = currentTime; // innerHTML 사용
    }

    updateTime();
    setInterval(updateTime, 1000);
});