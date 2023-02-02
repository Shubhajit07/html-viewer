var iframe = document.querySelector('iframe');

const changeHTML = html =>{
iframe.src = 'data:text/html;charset=utf-8,' + encodeURI(html);
}