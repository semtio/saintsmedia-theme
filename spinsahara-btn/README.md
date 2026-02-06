# Мини‑фреймворк кнопок

## Использование

### Кнопка (outline secondary)

```html
<button class="sm-m-button sm-m-gradient-border sm-m-button--outline sm-m-button--secondary sm-m-button--s sm-m-button--wow">
  <div class="sm-m-button-content">Log in</div>
</button>
```

### Кнопка (primary)

```html
<button class="sm-m-button sm-m-gradient-border sm-m-button--primary sm-m-button--s sm-m-button--wow">
  <div class="sm-m-button-content"><span>Sign up</span></div>
</button>
```

### WOW‑кнопка (большая)

```html
<button class="sm-m-wow-button sm-m-wow-button--theme-primary sm-m-wow-button--size-l">
  <span class="sm-m-wow-button__text">Sign up</span>
  <span class="sm-m-wow-button__background"></span>
</button>
```

## Комбинации классов

- Базовая кнопка: `sm-m-button`
- Размер: `sm-m-button--s`
- Тема: `sm-m-button--primary` или `sm-m-button--secondary`
- Контур: `sm-m-button--outline`
- WOW‑эффект: `sm-m-button--wow`
- Большая WOW‑кнопка: `sm-m-wow-button` + `sm-m-wow-button--theme-primary` + `sm-m-wow-button--size-l`

## Примечания

- В `buttons.css` уже есть базовый reset для `button`.
- Все переменные вынесены в `:root`, можно переопределять в проекте.
