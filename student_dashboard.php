<?php include("stdbinfo.php");

if(!isset($_SESSION["email"])){
    header("location:index.php");
}

include("student_navbar.php") ?>
    <div class="banner-image"></div>

    <div class="container">
        <div class="row education-container">
            <div class="col-md-6 education-description">
                <h1>Description </h1>
                <p>There are 225 Independent schools in Victoria, operating on almost 400 campuses and educating close to 160,000 students – representing around 15 per cent of all school students in Victoria.</p>
                <p>The Design Lab creates and embeds the best research and evidence-based experiences with leading local and global partners. We provide opportunities to consolidate core skills, deepen your understanding of contemporary learning and give you the space to be part of emerging practice.</p>
            </div>
            <div class="col-md-6 education-image">
                <img src="st3.jpg" alt="Education Image">
            </div>
        </div>
    </div>





<?php include("footer.php"); ?>
