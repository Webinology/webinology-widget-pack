# Webinology Widget Pack

Used to add widgets to Webinology websites.

Version 1.0.0

## Changelog

### 1.0.0
* Initial release.

## Notes

To add a new widget, complete the following steps:

* In includes/widgets, copy the file "class-webinology-example-widget.php" to a new file. Name the new file along the
lines of "class-webinology-my-new-widget.php" for consistency.
* Edit the new file and create your widget.
* Edit includes/class-webinology-widget-pack-widgets.php" and:
  * At the top (with the other requires) add a require_once for your new widget class file.
  * Within the class, in the webinology_register_example_widget function, add a register_widget call for your new
    widget class.
    
...