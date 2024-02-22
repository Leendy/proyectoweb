window.onload = function () {
    var sel = document.getElementById("sel");

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'variables1.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var stateObject = JSON.parse(xhr.responseText);
            for (var state in stateObject) {
                sel.options[sel.options.length] = new Option(state, state);
            }
        } else {
            console.error('Error al cargar las variables PHP.');
        }
    };
    xhr.send();
}