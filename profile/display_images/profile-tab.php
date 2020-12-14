<?php require_once("../server.php"); ?>

<main>
  <div class="mt-4">
      <div class="gallery p-3" id="show_images">
          <?php
      $sql_images = "SELECT * FROM images WHERE user_id = " . $_SESSION['id'] . " ORDER BY uploaded_on DESC LIMIT 20;";
      $result_images = mysqli_query($conn, $sql_images);

      if ($result_images->num_rows > 0) {
        while ($row = mysqli_fetch_array($result_images)) {
          echo '<div class="img"><img id=' . $row['image_id'] . ' src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" onclick="openImage(this.src, this.id)" /><div class="bottom-left-date">' . $row['uploaded_on'] . '</div></div>';
        }
      }
      ?>
      </div>

      <?php if ($_SESSION['total'] > 20) { ?>
      <div class="text-center">
          <button class="btn mt-5 mb-5" id="more_images">További képek...</button>
      </div>
      <?php } ?>

      <script src="display_images/images.js"></script>
  </div>
</main>

<script>
  $("#profile").addClass("active");
</script>