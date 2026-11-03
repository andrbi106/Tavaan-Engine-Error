# Tavaan Engine — Error

> **مدیریت خطا** — موتور Error در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.error` |
| نام | `Error` |
| عنوان فارسی | مدیریت خطا |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Error` |
| نوع | `engine` |

## کلاس‌های اصلی

- `src/ErrorCode.php`
- `src/ErrorHandler.php`
- `src/ErrorServiceProvider.php`
- `src/ExceptionHandler.php`
- `src/ExceptionMapper.php`
- `src/HttpException.php`
- `src/LogMasker.php`
- `src/RefCodeGenerator.php`
- `src/RenderResult.php`
- `src/Renderers/CliRenderer.php`
- `src/Renderers/DebugRenderer.php`
- `src/Renderers/HtmlRenderer.php`
- `src/Renderers/JsonRenderer.php`

## Service Providerها

- `Tavaan\Engine\Error\ErrorServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `log`

## پیکربندی

- فایل پیکربندی: `config/error.php`
- کلید: `error`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Error.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Error`** (این مخزن) | موتور Error |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
