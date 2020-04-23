![Image of Yaktocat](laravel-font-awesome.svg)

Easily add Font Awesome icons using these simple Blade directives.

## Installation

Simply require the package in your project. Supports Laravel 7 and above.

`composer require djam90/laravel-font-awesome`

That's it! 

The service provider will be automatically registered and the blade directives are ready to use in your views.

## Usage

There are 5 Blade directives made available with this package. These are to support the 5 different styles in Font Awesome:

- Solid (fas)
- Regular (far)
- Light (fal)
- Duotone (fad)
- Brand (fab)

### Examples

#### Solid

```
@fas('user')
```

Will output:

```
<i class="fas fa-user"></i>
```

#### Regular

```
@far('user')
```

Will output:

```
<i class="far fa-user"></i>
```

#### Light

```
@fal('user')
```

Will output:

```
<i class="fal fa-user"></i>
```

#### Duotone

```
@fad('user')
```

Will output:

```
<i class="fad fa-user"></i>
```

#### Brand

```
@fab('500px')
```

Will output:

```
<i class="fab fa-500px"></i>
```

### Caveats

If you attempt to use an incompatible directive and icon combination, it simply will not work. An example would be `@fab('user')` because there is no "user" brand icon.