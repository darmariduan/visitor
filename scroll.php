<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body { font-family: 'helvetica'; }
#contain {
  height: 400px;
  overflow-y: scroll;
}
#table_scroll {
  width: 100%;
  margin-top: 25px;
  margin-bottom: 50px;
  border-collapse: collapse;
}
#table_scroll thead th {
  padding: 10px;
  background-color: #ea922c;
  color: #fff;
}
#table_scroll tbody td {
  padding: 10px;
  background-color: #ed3a86;
  color: #fff;
  width: 20%;
  text-align: center;
}

#kepala {
  width: 100%;
  border-collapse: collapse;
}
#kepala thead th {
  padding: 10px;
  background-color: #ea922c;
  color: #fff;
  width: 20%;
}

    </style>
  </head>
  <body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <table border="0" id="kepala">
      <thead>
        <tr>
          <th>Name</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Country</th>
          <th>Position</th>
        </tr>
      </thead>
    </table>
    <div id="contain">
      <table border="0" id="table_scroll">
        <tbody>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
          <tr>
            <td>Salman</td>
            <td>Male</td>
            <td>0123456789</td>
            <td>Indonesia</td>
            <td>Front-end Developer</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p></p>
    <p></p>
    <script type="text/javascript">
      var my_time;
      $(document).ready(function() {
      pageScroll();
      $("#contain").mouseover(function() {
        clearTimeout(my_time);
      }).mouseout(function() {
        pageScroll();
      });
      });

      function pageScroll() {
      var objDiv = document.getElementById("contain");
      objDiv.scrollTop = objDiv.scrollTop + 1;
      $('p:nth-of-type(1)').html('scrollTop : '+ objDiv.scrollTop);
      $('p:nth-of-type(2)').html('scrollHeight : ' + objDiv.scrollHeight);
      if (objDiv.scrollTop == (objDiv.scrollHeight - 400)) {
        objDiv.scrollTop = 0;
      }
      my_time = setTimeout('pageScroll()', 25);
      }
    </script>
  </body>
</html>
