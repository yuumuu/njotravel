// accordion sidebar
function dropdownActive(slidedown) {
  if(slidedown.classList.contains('dropdown-active')) {
      slidedown.classList.remove('dropdown-active');
  } else {
      slidedown.classList.toggle('dropdown-active');
  }
}

// accordion profile
function dropdownProfile(show) {
  show.classList.toggle('dropdown-profile-active');
}


