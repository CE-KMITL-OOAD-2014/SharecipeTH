<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
         
        <title> SharecipeTH </title>
        <meta name="keywords" content="your, awesome, keywords, here" />
        <meta name="author" content="Jon Doe" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lorem ipsum posse menandri scripserit no, mei." />
 
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 
        <!-- CSS Bootstrap core CSS
        ================================================== -->
        <link rel="stylesheet" type="text/css" href="../../public/assets/bootstrap/dist/css/bootstrap.min.css" />
        <link href="../../public/assets/bootstrap/dist/css/slider.css" rel="stylesheet">
        <!--<link rel="stylesheet" type="text/css" href="public/assets/bootstrap/css/jquery-ui-bootstrap.css" />
        <script type="text/javascript" src="public/assets/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="public/assets/bootstrap/js/jquery-ui.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../public/assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../public/assets/bootstrap/dist/js/bootstrap-slider.js"></script>
        <style type="text/css">
            body {
                padding-top: 50px;
            }
        </style>

    </head>
    <body>
        <!-- นำเข้าไฟล์ header.blade.php -->
        @include("layouts.headerProfile")
         <div class="container">
            @yield("content")

        </div>
                 
        <!-- นำเข้าไฟล์ footer.blade.php -->
        @include("layouts.footer")
    </body>
        
        <script type="text/javascript">
            var count = 1;
            
            function toggler() {
                /*$("#" + divId + count).toggle();
                if(count<9)
                count++;*/
                if(count < 21){
                    var show = count ;
                    var div = document.createElement('div');
                    var div1 = document.createElement('div');
                    var div2 = document.createElement('div');
                    var div3 = document.createElement('div');
                    var div4 = document.createElement('div');
                    div.className = 'col-lg-12';
                    div2.className = 'form-group col-lg-4';
                    div3.className = 'form-group col-lg-2';
                    div4.className = 'form-group col-lg-2';
                    div.id = 'ingre'+count;
                    div1.id = 'div1-'+count;
                    div2.id = 'div2';
                    div3.id = 'div3';
                    div4.id = 'div4';
                    div2.innerHTML =    '<input type="text" class="form-control" name="ingredient[]" placeholder="ชื่อส่วนผสมที่ '+show+'"/>';
                    div3.innerHTML =    '<input type="text" class="form-control" name="quantity[]" placeholder="ปริมาณ"/>';
                    div4.innerHTML =    '<input type="text" class="form-control" name="unit[]" placeholder="หน่วย"/>';
                    document.getElementById('ingredient').appendChild(div);
                    document.getElementById('ingre'+count).appendChild(div1);
                    document.getElementById('div1-'+count).appendChild(div2);
                    document.getElementById('div1-'+count).appendChild(div3);
                    document.getElementById('div1-'+count).appendChild(div4);
                    count++;
                }
            }
            function deToggler(divId) {
                if(count>1){
                    count--;
                
                var d = document.getElementById('ingredient');

                var olddiv = document.getElementById('ingre'+count);

                d.removeChild(olddiv);
                }
            }
           
        </script>
        
</html>