const apiUrl = 'https://api.coinpaprika.com/v1/tickers?quotes=KRW';

function fetchAndUpdateData() {
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            const milkCryptoDiv = document.querySelector('.milkCrypto');
            milkCryptoDiv.innerHTML = ''; // 이전 데이터를 제거하여 업데이트된 값만 보여줌

            // Filtering data
            const filteredData = data.filter(item => item.id === 'mlk-milk-alliance');

            // Check if there are any matching items
            if (filteredData.length > 0) {
                const item = filteredData[0]; // Get the first matching item
                const priceElement = document.createElement('span');
                priceElement.textContent = `${item.quotes.KRW.price.toLocaleString()} 원`;
                milkCryptoDiv.appendChild(priceElement); // 업데이트된 가격을 추가
            } else {
                const errorMessage = document.createElement('span');
                errorMessage.textContent = '데이터를 찾을 수 없습니다.';
                milkCryptoDiv.appendChild(errorMessage);
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// 페이지 로드 시 즉시 데이터를 가져옴
fetchAndUpdateData();

// 10초마다 데이터를 업데이트
setInterval(fetchAndUpdateData, 10000); // 10000ms = 10초