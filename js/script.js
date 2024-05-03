document.getElementById('form').addEventListener('submit', function(event) {
    var task = document.getElementById('task').value.trim();
    var collaboration = document.getElementById('collaboration').value.trim();
    var dueDate = document.getElementById('duedate').value.trim();
    var status = document.getElementById('status').value.trim();
    var image = document.getElementById('image').value.trim();

    if (task === '' || collaboration === '' || dueDate === '' || status === '' || image === '') {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});