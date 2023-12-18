# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.4.1] - 2023-12-18

### Composer

- Changed `woocommerce/action-scheduler` from `3.6.4` to `3.7.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.1
- Changed `wp-pay-extensions/contact-form-7` from `v3.3.2` to `v3.4.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.4.0
- Changed `wp-pay/core` from `v4.14.2` to `v4.14.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.3

Full set of changes: [`1.4.0...1.4.1`][1.4.1]

[1.4.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.4.0...v1.4.1

## [1.4.0] - 2023-11-09

### Changed

- Requires PHP 8. ([87ad0b3](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/87ad0b34b715a38a5e4f486a2350dbb2eaaf0490))
- Tested up to WordPress 6.4. ([4994607](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/4994607648348e17044c39f0d3ef5085fe46f86e))

### Composer

- Changed `php` from `>=7.4` to `>=8.0`.
- Changed `wp-pay-gateways/mollie` from `v4.7.11` to `v4.8.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.8.1
- Changed `wp-pay/core` from `v4.14.1` to `v4.14.2`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.2

Full set of changes: [`1.3.0...1.4.0`][1.4.0]

[1.4.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.3.0...v1.4.0

## [1.3.0] - 2023-11-07

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.22` to `v2.12.0`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.12.0
- Changed `woocommerce/action-scheduler` from `3.6.2` to `3.6.4`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.4
- Changed `wp-pay-extensions/contact-form-7` from `v3.3.0` to `v3.3.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.3.2
- Changed `wp-pay/core` from `v4.12.0` to `v4.14.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.1

Full set of changes: [`1.2.1...1.3.0`][1.3.0]

[1.3.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.2.1...v1.3.0

## [1.2.1] - 2023-09-11

### Composer

- Changed `wp-pay-gateways/mollie` from `v4.7.9` to `v4.7.11`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.11
- Changed `wp-pay/core` from `v4.11.0` to `v4.12.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.12.0

Full set of changes: [`1.2.0...1.2.1`][1.2.1]

[1.2.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.2.0...v1.2.1

## [1.2.0] - 2023-08-28

### Changed

- Improved processing of Contact Form 7 form submission data.

### Fixed

- Fixed compatibility with plugin "Send PDF for Contact Form 7".

### Commits

- Updated libraries. ([077b718](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/077b718d926e20d7cb08bcff7842f87ad6ba0ae1))
- Update URL in readme (#7). ([89b4d6e](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/89b4d6efc13eb5a0e380c9f00b2689e4a420e3d5))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.21` to `v2.11.22`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.22
- Changed `woocommerce/action-scheduler` from `3.6.1` to `3.6.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.2
- Changed `wp-pay-extensions/contact-form-7` from `v3.2.5` to `v3.3.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.3.0
- Changed `wp-pay-gateways/mollie` from `v4.7.8` to `v4.7.9`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.9
- Changed `wp-pay/core` from `v4.10.1` to `v4.11.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.11.0

Full set of changes: [`1.1.6...1.2.0`][1.2.0]

[1.2.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.6...v1.2.0

## [1.1.6] - 2023-07-19

### Fixed

- Fixed fatal error after plugin activation.

### Composer

- Changed `wp-pay/core` from `v4.10.0` to `v4.10.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.10.1

Full set of changes: [`1.1.5...1.1.6`][1.1.6]

[1.1.6]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.5...v1.1.6

## [1.1.5] - 2023-07-18

### Composer

- Changed `wp-pay/core` from `v4.9.4` to `v4.10.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.10.0

Full set of changes: [`1.1.4...1.1.5`][1.1.5]

[1.1.5]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.4...v1.1.5

## [1.1.4] - 2023-07-12

### Commits

- Also replace `pronamic-money` text domain. ([5b3c7b7](https://github.com/pro

### Composer

- Changed `woocommerce/action-scheduler` from `3.6.0` to `3.6.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.1
- Changed `wp-pay-gateways/mollie` from `v4.7.7` to `v4.7.8`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.8
- Changed `wp-pay/core` from `v4.9.3` to `v4.9.4`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.4

Full set of changes: [`1.1.3...1.1.4`][1.1.4]

[1.1.4]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.3...v1.1.4

## [1.1.3] - 2023-06-01

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.18` to `v2.11.21`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.21
- Changed `woocommerce/action-scheduler` from `3.5.4` to `3.6.0`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.0
- Changed `wp-pay-extensions/contact-form-7` from `v3.2.4` to `v3.2.5`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.2.5
- Changed `wp-pay-gateways/mollie` from `v4.7.6` to `v4.7.7`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.7
- Changed `wp-pay/core` from `v4.9.2` to `v4.9.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.3

Full set of changes: [`1.1.2...1.1.3`][1.1.3]

[1.1.3]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.2...v1.1.3

## [1.1.2] - 2023-04-04

### Fixed

- Fixed PHP warning about missing `package.json` file.

### Commits

- Updated pronamic/wp-mollie to version 1.2.1. ([453bee4](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/453bee48f925786433aa4809d9042245e5757e26))
- Updated translations. ([446ad6a](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/446ad6a8d15b3c5e08fcb79e67e8546c1ef6376d))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.17` to `v2.11.18`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.18
- Changed `wp-pay/core` from `v4.9.0` to `v4.9.2`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.2
Full set of changes: [`1.1.1...1.1.2`][1.1.2]

[1.1.2]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.1...v1.1.2

## [1.1.1] - 2023-03-29

### Commits

- Updated translations. ([c26fbe0](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/c26fbe0847ed22956be1539ef770b0fcaf9fe9fe))
- Tested up to 6.2. ([466b459](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/466b459cb89cf7dda12f9c2b4df940b235d509db))
- Use class as integration key. ([b873559](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/commit/b8735595f5d5c663d915f5fd6e81d7c5f1104fa1))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.16` to `v2.11.17`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.17
- Changed `wp-pay-extensions/contact-form-7` from `v3.2.2` to `v3.2.4`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.2.4
- Changed `wp-pay-gateways/mollie` from `v4.7.4` to `v4.7.6`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.6
- Changed `wp-pay/core` from `v4.7.3` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.0
Full set of changes: [`1.1.0...1.1.1`][1.1.1]

[1.1.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.1.0...v1.1.1

## [1.1.0] - 2023-02-23

### Addedd

- Added support for multiple free text value options. ([84d9856](https://github.com/pronamic/wp-pronamic-pay-contact-form-7/commit/84d9856461da4f915fed5485bf60818162c120cf))

### Changed

- Updated payment start on form submit. ([631888a](https://github.com/pronamic/wp-pronamic-pay-contact-form-7/commit/631888a659fd8017bd78dc4162cf341cbb970dbc))
- Fixed duplicate execution of `$gateway->start( $payment )` in redirect routine of HTML form gateways. ([467aeb5](https://github.com/pronamic/wp-pay-core/commit/467aeb59e24846c0bbd01e88ff5e1191bcfde6b5))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.15` to `v2.11.16`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.16
- Changed `wp-pay-extensions/contact-form-7` from `v3.2.1` to `v3.2.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-contact-form-7/releases/tag/v3.2.2
- Changed `wp-pay/core` from `v4.7.2` to `v4.7.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.7.3
Full set of changes: [`1.0.2...1.1.0`][1.1.0]

[1.1.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.0.2...v1.1.0

## [1.0.2] - 2023-02-17

### Fixed

- Fixed running Mollie integration installation.

### Composer

- Changed `wp-pay-gateways/mollie` from `v4.7.3` to `v4.7.4`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.4
Full set of changes: [`1.0.1...1.0.2`][1.0.2]

[1.0.2]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.0.1...v1.0.2

## [1.0.1] - 2023-02-07
### Composer

- Changed `wp-pay-gateways/mollie` from `v4.7.2` to `v4.7.3`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.3
- Changed `wp-pay/core` from `v4.7.1` to `v4.7.2`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.7.2
Full set of changes: [`1.0.0...1.0.1`][1.0.1]

[1.0.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/compare/v1.0.0...v1.0.1

## [1.0.0] - 2023-01-30

- First release.

[1.0.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7/releases/tag/v1.0.0
