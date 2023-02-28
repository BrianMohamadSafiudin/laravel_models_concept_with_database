@extends('index')

@section('content')
<style>
    body {
    background-color: #FFFBEB;
    font-size: 14px;
    line-height: 22px;
    color: black;
  }

  .resume {
    width: 800px;
    height: auto;
    display: flex;
    margin: 50px auto;
  }

  .resume .resume_left {
    padding: 25px;
    width: 100%;
    background-color: bisque;
  }

  .resume .resume_profile img {
    width: 100%;
    height: 100%;
  }

  .resume .resume_right {
    width: 520px;
    background-color: antiquewhite;
    padding: 25px;
  }
</style>
<div class="resume">
    <table border=4 align="top">
        <tr>
            <td>
                <div class="resume_profile">
                    <img src="https://avatars.githubusercontent.com/BrianMohamadSafiudin">
                </div>
                <div class="resume_left">
                    <br><h1>Contact</h1><br>
                    <h5>
                        Email id : brianms2004@gmail.com<br>
                        Mobile no : 082114903130
                    </h5>
                    <br><hr><br>
                    <h1>Competence</h1><br>
                    <h5>
                        Programming Languages : <br>
                        HTML5, CSS3, PHP, Java
                    </h5>
                    <br><hr><br>
                    <h1>Languages</h1><br>
                    <h5>
                        Indonesia <br>
                        English <br>
                    </h5>
                    <br><hr><br>
                    <h1>Hobby</h1><br>
                    <h5>
                        Learn Something New <br>
                        Playing Games
                    </h5>
                    <br><hr><br><br><br><br><br>
                </div>
            </td>
            <td>
                <div class="resume_right">
                    <h1>Brian Mohamad Safiudin</h1><br>
                    <h5>
                        Full Stack Engineer<br>
                        College Student From Polytechnic State Of Malang
                    </h5>
                    <br><hr><br>
                    <h1>Summary</h1><br>
                    <h5>
                        An Undergraduate Student of Informatics Engineer Information
                        Technology, Expertize in HTML, Python, Java, Javascript, Dart,
                        Node.Js, and React
                    </h5>
                    <br><hr><br>
                    <h1>Education</h1><br>
                    <h5>
                        Polytechnic State Of Malang<br>
                        SMAN 2 Kediri <br>
                    </h5>
                    <br><hr><br>
                    <h1>Certifications</h1><br>
                    <h5>
                        AWS Academy Graduate - AWS Academy Cloud Architecting :
                        <a href="https://www.credly.com/badges/2f847d76-132d-4dde-833f-e9c027c7a11a?source=linked_in_profile">
                            Credential Click Here
                        </a> <br>
                        AWS Academy Graduate - AWS Academy Cloud Foundations :
                        <a href="https://www.credly.com/badges/92f7cfa2-14f9-4a8d-b6d3-79db1fc40cb7?source=linked_in_profile">
                            Credential Click Here
                        </a> <br>
                    </h5>
                    <br><hr><br>
                    <h1>Youtube</h1><br>
                    <iframe width="230" height="200"
                        src="https://www.youtube.com/embed/-JpwbbDsDS4">
                    </iframe>
                    <iframe width="230" height="200"
                        src="https://www.youtube.com/embed/ofUhiFSf-6w">
                    </iframe>
                    <br><br><hr>
                </div>
            </td>
        </tr>
</table>
</div>

@endsection
