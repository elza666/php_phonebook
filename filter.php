<?php

function filter1Prijmeni($seznam, $letter) {
  $letter = strtoupper($letter);
  return array_filter($seznam, function ($record) use ($letter) {
    $firstLetter = strtoupper(
      substr($record['prijmeni'], 0, 1)
    );
    return $firstLetter === $letter;
  });
}

