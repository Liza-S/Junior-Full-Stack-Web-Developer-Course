var requesObject = new XMLHttpRequest();
requesObject.open('GET', '/task-2/', false);

requesObject.send();

console.log(requesObject.status, requesObject.statusText);

console.log(requesObject.responseText);

