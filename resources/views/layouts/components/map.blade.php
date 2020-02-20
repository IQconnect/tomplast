@php
  $pins = option('pins');
  $pinsArray = [];

  foreach ($pins as $pin) {
      $pinObject = '';
      $pinObject->pin = $pin['pin'];
      $pinObject->content = $pin['tooltip'];
      $pinObject->icon = $pin['icon']['url'];

      array_push($pinsArray, $pinObject);
  }

  $pinsJSON = json_encode($pinsArray);
@endphp

<div class="map" id="google-map" google-map data-pins="{{ $pinsJSON }}"></div>

{{-- @dump($pins)
@dump($pinsArray) --}}