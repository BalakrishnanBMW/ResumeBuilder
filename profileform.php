<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form | Profile Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h1 class="text-center">
        Profile Form
    </h1>
    <form action="">
        <div class="form-group my-3">
            <label for="namee">Name</label>
            <input type="text" name="namee" class="form-control" required id="namee">
        </div>
        <div class="form-group my-3">
            <label for="displine-degree">Displine/Degree</label>
            <input type="text" name="displine-degree" class="form-control" required id="displine-degree">
        </div>
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                <th scope="col">Degree/Schooling</th>
                <th scope="col">Collage/School name</th>
                <th scope="col">Year of Passing</th>
                <th scope="col">CGPA/Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="degree1" class="form-control" required id="degree1" placeholder="Degree"></td>
                    <td><input type="text" name="university-college" placeholder="University/College Name"  class="form-control" required id="university-college"></td>
                    <td><input type="text" class="form-control" name="yop1" id="yop1" placeholder="year" required></td>
                    <td><input type="text" class="form-control" id="percent" name="cgpa-percent" required placeholder="CGPA/Percentage"></td>
                </tr>
                <tr>
                    <td><input type="text" name="degree2" class="form-control" required id="degree2" placeholder="Degree"></td>
                    <td><input type="text" name="school1" placeholder="School Name"  class="form-control" required id="school1"></td>
                    <td><input type="text" class="form-control" name="yop2" id="yop2" placeholder="year" required></td>
                    <td><input type="text" class="form-control" id="percent2" name="cgpa-percent" required placeholder="CGPA/Percent"></td>
                </tr>
                <tr>
                    <td><input type="text" name="degree3" class="form-control" required id="degree3" placeholder="Degree"></td>
                    <td><input type="text" name="school2" placeholder="School Name"  class="form-control" required id="school2"></td>
                    <td><input type="text" class="form-control" name="yop3" id="yop3" placeholder="year" required></td>
                    <td><input type="text" class="form-control" id="percent3" name="cgpa-percent" required placeholder="CGPA/Percentage"></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group my-3">
            <label for="skills">Skills</label>
            <input type="text" class="form-control m-2 skill" id="skills" name="skill1" required placeholder="skill1">
            <input type="text" class="form-control m-2 skill" name="skill2" required placeholder="skill2">
            <input type="text" class="form-control m-2 skill" name="skill3" required placeholder="skill3">
        </div>
        <div class="form-group my-3">
            <label for="experience">Experience</label>
            <input type="text" name="experience1" class="form-control m-2" placeholder="Experience" required id="experience">
        </div>
        <table class="table table-sm my-3 table-bordered">
            <thead>
                <tr>
                    <th scope="col" colspan=2>Contact Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" required class="form-control" id="phone" name="phone" placeholder="Mobile no"></td>
                </tr>
                <tr>
                    <td>e-mail</td>
                    <td><input type="text" required class="form-control" id="email" name="email" placeholder="Mail Id"></td>
                </tr>
                <tr>
                    <td>LinkedIn</td>
                    <td><input type="text" required class="form-control" id="linkedin" name="linkedin" placeholder="Linked In"></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group my-3">
            <label for="lang">Language</label>
            <input type="text" class="form-control m-2" id="lang" name="lang1" required placeholder="Language 1">
            <input type="text" class="form-control m-2" name="lang2" required placeholder="Language 2">
        </div>
        <div class="form-group my-3">
            <label for="desc">Profile Description</label>
            <textarea name="desc" required class="w-100 m-2" id="desc" style="resize:none; outline:0; border-color:#ccc" placeholder="About You" rows="5"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="photo">Profile Picture</label>
            <input type="file" required class="form-control-file" id="photo">
        </div>
        <button type="submit" class="btn my-3 btn-primary">Submit</button>
    </form>
</div>

</body>
</html>