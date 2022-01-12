import './style.css'

if (window.location.href != "index.php") {
  document.querySelector('#app').innerHTML = `
    <h1>Hello Agent!</h1>
    <a href="/index.php" target="_blank">Please continue to see valuations chart</a>
  `;
  
};