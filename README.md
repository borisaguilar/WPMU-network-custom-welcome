WPMU-network-ads
================

Wordpress Multisite Plugin, display ads code on every site on your network.

## Installation and Usage

### V0.0.x:
- Place all files on plugins directory
- Go to Network Settings->Network Ads Settings
- Select the code to display on every page and the websites that will 
have an exception

### V0.0.1: 
- Place the file in mu-plugins directory of your wpmu. 
- Edit adsense code accordingly. 
- Enjoy :)

## Future Features

- Select the sites that don't have to display ads.
- Network Admin interface to paste adsense code :)
- Internationalization

##Author

Boris Aramis Aguilar Rodriguez - `me <at> borisaguilar.com`

## License

GPLv2 License

## Changelog
### 0.0.1
- Hook on wp_foot to inject adsense code manually added on plugin
- Generate random class in HTML injected code to avoid not displaying 
ads by hiding with css.
