function sendData(data) {
  let xhr = new XMLHttpRequest();
  let url = "server.php";

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert("Data saved successfully!");
    }
  };

  let urlEncodedData = "";
  let urlEncodedDataPairs = [];
  for (let key in data) {
    urlEncodedDataPairs.push(
      encodeURIComponent(key) + "=" + encodeURIComponent(data[key])
    );
  }
  urlEncodedData = urlEncodedDataPairs.join("&");

  xhr.send(urlEncodedData);
}
