#  Pay Module

The **Pay** module enables authorized users to integrate a payment form into their ImaginaCMS project. This form can be embedded in the frontend via a modal and supports essential billing information fields such as invoice number, buyer details, and payment amount.

---

##  Installation

```bash
composer require imagina/ipay-module

php artisan module:migrate Ipay
```

---

## Configuration

This module uses the helper function `ipay_config($template)` to access its configuration.

### Default View

The default frontend view for the payment form modal is:

```blade
ipay::frontend.form.modal
```

---

## Usage

To trigger the modal form, you need a clickable component (like a button) with the appropriate attributes to open the modal.

###  Example

```blade
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalformIpay">
  {{ trans('ipay::common.form.btns.openForm') }}
</button>
```

> The attributes `data-toggle="modal"` and `data-target="#modalformIpay"` activate the modal listener and open the payment form modal.