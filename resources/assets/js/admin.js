const adminMenuSlideButton = document.getElementById('admin-slide-button')

adminMenuSlideButton.onclick = function () {
  this.classList.toggle('is-active');
  document.getElementById('admin-menu').classList.toggle('is-active');
}
