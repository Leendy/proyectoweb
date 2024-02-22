document.getElementById('addNoteButton').addEventListener('click', function () {
    document.getElementById('noteContainer').style.display = 'block';
});

document.getElementById('submitNoteButton').addEventListener('click', function () {
    const noteInput = document.getElementById('noteInput');
    const notesDiv = document.getElementById('notes');

    if (noteInput.value.trim()) {
        const noteParagraph = document.createElement('p');
        noteParagraph.textContent = noteInput.value;
        notesDiv.appendChild(noteParagraph);

        noteInput.value = '';
        document.getElementById('noteContainer').style.display = 'none';
    } else {
        alert('Please enter a non-empty note.');
    }
});