# Alerts

## Usage

**Important:** Include the `alerts.css` in your `app.css`.

```css
/* Typically the app.css is located in ./resources/css/ */
@import "./../../vendor/distortedfusion/laravel-tailwind-layout/resources/css/alerts.css";
```

```php
<x-alert type="success" title="Action required" message="Lorem, ipsum dolor sit amet consectetur adipisicing elit."/>
<x-alert type="info" title="Action required" message="Lorem, ipsum dolor sit amet consectetur adipisicing elit."/>
<x-alert type="warning" title="Action required" message="Lorem, ipsum dolor sit amet consectetur adipisicing elit."/>
<x-alert type="danger" title="Action required" message="Lorem, ipsum dolor sit amet consectetur adipisicing elit."/>
```
