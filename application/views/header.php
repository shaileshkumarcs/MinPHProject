<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shyam Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">
    i {
    font-size : 12px;
    padding-right: 10px;
    color: #aece61;
}


/* Footer */
.footer {
    position: relative;
    background-color: #092746;
    color: #7d7975;
    padding: 95px 0 50px;
    font-size:16px;
}
.footer p {
    line-height:26px;
    color : #fff;
}
.footer h5 {
    font-size: 22px;
    font-weight: 700;
    color: #aece61  ;
    position: relative;
    padding-bottom: 16px;
}
.footer h5:after {
    content: '';
    display: block;
    margin: 5px 0 0;
    width: 40%;
    height: 1px;
    background-color: # ;
}

.footer ul {
    list-style: none;
    line-height:35px;
    margin: 0px;
    color:#fff;
    
}
.footer a {
    color:# ;

}
.footer a:hover {
    color: #aece61 ;
}



/*footer bottom */
.footer-bottom {
    padding-top: 10px;
    padding-bottom: 25px;
    border-top: 1px solid #2f2f33 ;
    background: #1e1d22  ;
    
}
.copyright-text p {
    color: #7d7975;
    margin-top: 18px;
    margin-bottom: 0;
    font-size:15px;
}

.copyright-text a {
    color: #7d7975;
    margin: 0px 10px 0px 10px;
    
}
.copyright-text a:hover {
    color: #aece61  ;
    
    
}
 

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url().'RegisterView'; ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

