<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <!-- The callback parameter is required, so we use console.debug as a noop -->

 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.051340100377!2d103.8780275!3d1.31794335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1831b3334157%3A0xef2b9a5526ac77ad!2sJames%20Cook%20University%2C%20Singapore!5e0!3m2!1sen!2ssg!4v1704677420913!5m2!1sen!2ssg" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      gmp-map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <gmp-map center="1.2966854572296143,103.77635955810547" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="1.2966854572296143,103.77635955810547" title="My location">
      </gmp-advanced-marker>
    </gmp-map>
  </body>
</html>