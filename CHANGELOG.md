# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
