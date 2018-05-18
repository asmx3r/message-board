<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <link rel="stylesheet" src="/css/screen.css">

</head>
<body>
   <div id="wrapper">
      <div id='pranesimai'>
         <?php  // errors and other messages
            echo $pranesimas;
         ?>
         </div>
          <h1>Jūsų žinutės</h1>
          <textarea id="pranesimas"></textarea>
          <form id="postas" method="post" action="app/core.php">
              <p class="err">
                  <label for="fullname">Vardas, pavardė *</label><br/>
                  <input id="fullname" type="text" name="fullname" value="" />
              </p>
              <p>
                  <label for="gimdienis">Gimimo data *</label><br/>
                  <input id="gimdienis" type="date" name="gimdienis" value="" />
              </p>
              <p>
                  <label for="email">El.pašto adresas</label><br/>
                  <input id="email" type="text" name="email" value="" />
              </p>
              <p class="err">
                  <label for="zinute">Jūsų žinutė *</label><br/>

              </p>
              <p>
                  <span>* - privalomi laukai</span>
                  <input type="submit" value="skelbti" onkeyup="skelbti"/>
                  <img src="img/ajax-loader.gif" alt="" />
              </p>
          </form>
       </div>
    </div>
</body>
