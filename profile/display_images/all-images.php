<?php
$_SESSION['side'] = "all-images";
?>

<script>
  $("#all-images").addClass("active");
</script>

<main>
    <div class="gallery p-3 mt-3" id="show_images">
      <?php
      Flight::set("sql_images", "SELECT * FROM images ORDER BY uploaded_on DESC LIMIT 20;");
      $result_images = mysqli_query($conn, Flight::get("sql_images"));

      if ($result_images->num_rows > 0) {
        while ($row = mysqli_fetch_array($result_images)) {
          echo '<div class="img"><img id="' . $row['image_id'] . '" src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" onclick="openImage(this.src, this.id);selectComments(this.id)" /><div class="bottom-left-date">' . $row['uploaded_on'] . '</div><div class="centered">' . $row['username'] . '</div></div>';
        }
      }
      ?>
    </div>

    <?php if ($_SESSION['Alltotal'] > 20) { ?>
      <div class="text-center">
        <button class="btn mt-5 mb-5" id="more_images"><?php echo $moreImages ?></button>
      </div>
    <?php } ?>
</main>