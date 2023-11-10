<?php
function u_setup_theme() {
  add_theme_support('editor-styles');

  add_editor_style([
    'https:/css.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
    'assets/css/bootstrap-icons/bootstrap-icons.css',
    'assets/css/index.css',
    'assets/css/editor.css'
  ]);

}