<!-- <?php
      if (isset($_POST["showwithname"])) {
        $pname = $_POST["pname"];
        $sql = "SELECT * FROM product where productname='$pname'";
        $retval = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($retval)) {
      ?>
          </span>
          <table width="444" border="1" align="center" bgcolor="white">
            <tr bgcolor="white">
              <td height="25" class="style10">
                <div align="center"><img src="images/<?php echo $row['image'] ?>" width="200" height="250" /></div>
              </td>
            </tr>

            <tr>
              <td class="style10">
                <p align="center">Product Name: <?php echo $row['productname'] ?></p>
                <p align="center">Product Price:<?php echo $row['productprice'] ?></p>

            </tr>
          </table>
          <span class="style10"><br />

    <?php
        }
      } 
        ?> 


  </section>

  <!-- end shop section -->




  <!-- end info section -->
