<!DOCTRYPE html>`
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Add a New Course</h1>
    <form method="POST" action="/projects">
        {{csrf_field()}}
        <div>
            <input type="text" name="id" placeholder="Course Id">
        </div>
        <div>
            <input type="text" name="name" placeholder="Course Name">
        </div>
        <div>
            <input type="text" name="code" placeholder="Course Code">
        </div>
        <div>
            <input type="number" name="duration" placeholder="Course Duration">
        </div>
        <div>
            <button type="submit">Add Course</button>
        <div>
    </form>
</body>
</html>