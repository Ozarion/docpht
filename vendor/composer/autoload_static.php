<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9327150735d8287c144dc69d98037e0
{
    public static $files = array (
        '19a7e2c3b1d506dcdc1b60aab8e102e4' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/shortcuts.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c7a1089ba35f8274cf630debb7de059c' => __DIR__ . '/..' . '/ezimuel/php-secure-session/bin/register_secure_session.php',
        '5e187b582b2b3bb26276f0085ef51bb1' => __DIR__ . '/..' . '/leblanc-simon/parsedown-checkbox/ParsedownCheckbox.php',
        'afdda9f94b76f77a7518e02eee753cc9' => __DIR__ . '/..' . '/nette/mail/src/compatibility.php',
        '6195ccae414b7a82ab47247beb894d66' => __DIR__ . '/..' . '/nezamy/route/system/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'geertw\\IpAnonymizer\\' => 20,
        ),
        'S' => 
        array (
            'System\\Support\\' => 15,
            'System\\' => 7,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Plasticbrain\\FlashMessages\\' => 27,
            'PHPSecureSession\\' => 17,
        ),
        'N' => 
        array (
            'Nette\\Http\\Session\\' => 19,
        ),
        'E' => 
        array (
            'Emojione\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'geertw\\IpAnonymizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/geertw/ip-anonymizer/src',
        ),
        'System\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/nezamy/support',
        ),
        'System\\' => 
        array (
            0 => __DIR__ . '/..' . '/nezamy/route/system',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Plasticbrain\\FlashMessages\\' => 
        array (
            0 => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src',
        ),
        'PHPSecureSession\\' => 
        array (
            0 => __DIR__ . '/..' . '/ezimuel/php-secure-session/src',
        ),
        'Nette\\Http\\Session\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/override/vendor/nette/http/src/Http/Session.php',
        ),
        'Emojione\\' => 
        array (
            0 => __DIR__ . '/..' . '/emojione/emojione/lib/php/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
        1 => __DIR__ . '/../..' . '/tests',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Browser' => __DIR__ . '/..' . '/cbschuld/browser.php/lib/Browser.php',
        'DocPHT\\Controller\\AdminController' => __DIR__ . '/../..' . '/src/controller/AdminController.php',
        'DocPHT\\Controller\\ErrorPageController' => __DIR__ . '/../..' . '/src/controller/ErrorPageController.php',
        'DocPHT\\Controller\\FormPageController' => __DIR__ . '/../..' . '/src/controller/FormPageController.php',
        'DocPHT\\Controller\\HomeController' => __DIR__ . '/../..' . '/src/controller/HomeController.php',
        'DocPHT\\Controller\\LoginController' => __DIR__ . '/../..' . '/src/controller/LoginController.php',
        'DocPHT\\Core\\Translator\\T' => __DIR__ . '/../..' . '/src/core/translations/T.php',
        'DocPHT\\Form\\AddSectionForm' => __DIR__ . '/../..' . '/src/forms/AddSectionForm.php',
        'DocPHT\\Form\\AddUserForm' => __DIR__ . '/../..' . '/src/forms/AddUserForm.php',
        'DocPHT\\Form\\BackupsForms' => __DIR__ . '/../..' . '/src/forms/BackupsForms.php',
        'DocPHT\\Form\\CreatePageForm' => __DIR__ . '/../..' . '/src/forms/CreatePageForm.php',
        'DocPHT\\Form\\DeletePageForm' => __DIR__ . '/../..' . '/src/forms/DeletePageForm.php',
        'DocPHT\\Form\\HomePageForm' => __DIR__ . '/../..' . '/src/forms/HomePageForm.php',
        'DocPHT\\Form\\InsertSectionForm' => __DIR__ . '/../..' . '/src/forms/InsertSectionForm.php',
        'DocPHT\\Form\\LoginForm' => __DIR__ . '/../..' . '/src/forms/LoginForm.php',
        'DocPHT\\Form\\LostPasswordForm' => __DIR__ . '/../..' . '/src/forms/LostPasswordForm.php',
        'DocPHT\\Form\\MakeupForm' => __DIR__ . '/../..' . '/src/forms/MakeupForm.php',
        'DocPHT\\Form\\ModifySectionForm' => __DIR__ . '/../..' . '/src/forms/ModifySectionForm.php',
        'DocPHT\\Form\\PublishPageForm' => __DIR__ . '/../..' . '/src/forms/PublishPageForm.php',
        'DocPHT\\Form\\RecoveryPasswordForm' => __DIR__ . '/../..' . '/src/forms/RecoveryPasswordForm.php',
        'DocPHT\\Form\\RemoveSectionForm' => __DIR__ . '/../..' . '/src/forms/RemoveSectionForm.php',
        'DocPHT\\Form\\RemoveUserForm' => __DIR__ . '/../..' . '/src/forms/RemoveUserForm.php',
        'DocPHT\\Form\\SearchForm' => __DIR__ . '/../..' . '/src/forms/SearchForm.php',
        'DocPHT\\Form\\SortSectionForm' => __DIR__ . '/../..' . '/src/forms/SortSectionForm.php',
        'DocPHT\\Form\\TranslationsForm' => __DIR__ . '/../..' . '/src/forms/TranslationsForm.php',
        'DocPHT\\Form\\UpdateEmailForm' => __DIR__ . '/../..' . '/src/forms/UpdateEmailForm.php',
        'DocPHT\\Form\\UpdatePageForm' => __DIR__ . '/../..' . '/src/forms/UpdatePageForm.php',
        'DocPHT\\Form\\UpdatePasswordForm' => __DIR__ . '/../..' . '/src/forms/UpdatePasswordForm.php',
        'DocPHT\\Form\\UploadLogoForm' => __DIR__ . '/../..' . '/src/forms/UploadLogoForm.php',
        'DocPHT\\Form\\VersionForms' => __DIR__ . '/../..' . '/src/forms/VersionForms.php',
        'DocPHT\\Form\\VersionSelectForm' => __DIR__ . '/../..' . '/src/forms/VersionSelectForm.php',
        'DocPHT\\Lib\\DocBuilder' => __DIR__ . '/../..' . '/src/lib/DocBuilder.php',
        'DocPHT\\Lib\\DocPHT' => __DIR__ . '/../..' . '/src/lib/DocPHT.php',
        'DocPHT\\Model\\AccessLogModel' => __DIR__ . '/../..' . '/src/model/AccessLogModel.php',
        'DocPHT\\Model\\AdminModel' => __DIR__ . '/../..' . '/src/model/AdminModel.php',
        'DocPHT\\Model\\BackupsModel' => __DIR__ . '/../..' . '/src/model/BackupsModel.php',
        'DocPHT\\Model\\HomePageModel' => __DIR__ . '/../..' . '/src/model/HomePageModel.php',
        'DocPHT\\Model\\PageModel' => __DIR__ . '/../..' . '/src/model/PageModel.php',
        'DocPHT\\Model\\SearchModel' => __DIR__ . '/../..' . '/src/model/SearchModel.php',
        'DocPHT\\Model\\VersionModel' => __DIR__ . '/../..' . '/src/model/VersionModel.php',
        'Emojione\\Client' => __DIR__ . '/..' . '/emojione/emojione/lib/php/src/Client.php',
        'Emojione\\ClientInterface' => __DIR__ . '/..' . '/emojione/emojione/lib/php/src/ClientInterface.php',
        'Emojione\\Emojione' => __DIR__ . '/..' . '/emojione/emojione/lib/php/src/Emojione.php',
        'Emojione\\Ruleset' => __DIR__ . '/..' . '/emojione/emojione/lib/php/src/Ruleset.php',
        'Emojione\\RulesetInterface' => __DIR__ . '/..' . '/emojione/emojione/lib/php/src/RulesetInterface.php',
        'Instant\\Core\\Controller\\BaseController' => __DIR__ . '/../..' . '/src/core/Controller/BaseController.php',
        'Instant\\Core\\Helper\\TextHelper' => __DIR__ . '/../..' . '/src/core/Helper/TextHelper.php',
        'Instant\\Core\\Model\\AbstractModel' => __DIR__ . '/../..' . '/src/core/Model/AbstractModel.php',
        'Instant\\Core\\Views\\View' => __DIR__ . '/../..' . '/src/core/Views/View.php',
        'Latte\\CompileException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Compiler' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Compiler.php',
        'Latte\\Engine' => __DIR__ . '/..' . '/latte/latte/src/Latte/Engine.php',
        'Latte\\Helpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Helpers.php',
        'Latte\\HtmlNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/HtmlNode.php',
        'Latte\\ILoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/ILoader.php',
        'Latte\\IMacro' => __DIR__ . '/..' . '/latte/latte/src/Latte/IMacro.php',
        'Latte\\Loaders\\FileLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/FileLoader.php',
        'Latte\\Loaders\\StringLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/StringLoader.php',
        'Latte\\MacroNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroNode.php',
        'Latte\\MacroTokens' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroTokens.php',
        'Latte\\Macros\\BlockMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacros.php',
        'Latte\\Macros\\CoreMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/CoreMacros.php',
        'Latte\\Macros\\MacroSet' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/MacroSet.php',
        'Latte\\Parser' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Parser.php',
        'Latte\\PhpHelpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpHelpers.php',
        'Latte\\PhpWriter' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpWriter.php',
        'Latte\\RegexpException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\RuntimeException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Runtime\\CachingIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/CachingIterator.php',
        'Latte\\Runtime\\FilterExecutor' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterExecutor.php',
        'Latte\\Runtime\\FilterInfo' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterInfo.php',
        'Latte\\Runtime\\Filters' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Filters.php',
        'Latte\\Runtime\\Html' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Html.php',
        'Latte\\Runtime\\IHtmlString' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/IHtmlString.php',
        'Latte\\Runtime\\ISnippetBridge' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/ISnippetBridge.php',
        'Latte\\Runtime\\SnippetDriver' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/SnippetDriver.php',
        'Latte\\Runtime\\Template' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Template.php',
        'Latte\\Strict' => __DIR__ . '/..' . '/latte/latte/src/Latte/Strict.php',
        'Latte\\Token' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Token.php',
        'Latte\\TokenIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/TokenIterator.php',
        'Latte\\Tokenizer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Tokenizer.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Bridges\\FormsDI\\FormsExtension' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsDI/FormsExtension.php',
        'Nette\\Bridges\\FormsLatte\\FormMacros' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsLatte/FormMacros.php',
        'Nette\\Bridges\\FormsLatte\\Runtime' => __DIR__ . '/..' . '/nette/forms/src/Bridges/FormsLatte/Runtime.php',
        'Nette\\Bridges\\HttpDI\\HttpExtension' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpDI/HttpExtension.php',
        'Nette\\Bridges\\HttpDI\\SessionExtension' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpDI/SessionExtension.php',
        'Nette\\Bridges\\HttpTracy\\SessionPanel' => __DIR__ . '/..' . '/nette/http/src/Bridges/HttpTracy/SessionPanel.php',
        'Nette\\Bridges\\MailDI\\MailExtension' => __DIR__ . '/..' . '/nette/mail/src/Bridges/MailDI/MailExtension.php',
        'Nette\\ComponentModel\\ArrayAccess' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/ArrayAccess.php',
        'Nette\\ComponentModel\\Component' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/Component.php',
        'Nette\\ComponentModel\\Container' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/Container.php',
        'Nette\\ComponentModel\\IComponent' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/IComponent.php',
        'Nette\\ComponentModel\\IContainer' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/IContainer.php',
        'Nette\\ComponentModel\\RecursiveComponentIterator' => __DIR__ . '/..' . '/nette/component-model/src/ComponentModel/RecursiveComponentIterator.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Forms\\Container' => __DIR__ . '/..' . '/nette/forms/src/Forms/Container.php',
        'Nette\\Forms\\ControlGroup' => __DIR__ . '/..' . '/nette/forms/src/Forms/ControlGroup.php',
        'Nette\\Forms\\Controls\\BaseControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/BaseControl.php',
        'Nette\\Forms\\Controls\\Button' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/Button.php',
        'Nette\\Forms\\Controls\\Checkbox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/Checkbox.php',
        'Nette\\Forms\\Controls\\CheckboxList' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/CheckboxList.php',
        'Nette\\Forms\\Controls\\ChoiceControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/ChoiceControl.php',
        'Nette\\Forms\\Controls\\CsrfProtection' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/CsrfProtection.php',
        'Nette\\Forms\\Controls\\HiddenField' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/HiddenField.php',
        'Nette\\Forms\\Controls\\ImageButton' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/ImageButton.php',
        'Nette\\Forms\\Controls\\MultiChoiceControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/MultiChoiceControl.php',
        'Nette\\Forms\\Controls\\MultiSelectBox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/MultiSelectBox.php',
        'Nette\\Forms\\Controls\\RadioList' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/RadioList.php',
        'Nette\\Forms\\Controls\\SelectBox' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/SelectBox.php',
        'Nette\\Forms\\Controls\\SubmitButton' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/SubmitButton.php',
        'Nette\\Forms\\Controls\\TextArea' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextArea.php',
        'Nette\\Forms\\Controls\\TextBase' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextBase.php',
        'Nette\\Forms\\Controls\\TextInput' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/TextInput.php',
        'Nette\\Forms\\Controls\\UploadControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/Controls/UploadControl.php',
        'Nette\\Forms\\Form' => __DIR__ . '/..' . '/nette/forms/src/Forms/Form.php',
        'Nette\\Forms\\Helpers' => __DIR__ . '/..' . '/nette/forms/src/Forms/Helpers.php',
        'Nette\\Forms\\IControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/IControl.php',
        'Nette\\Forms\\IFormRenderer' => __DIR__ . '/..' . '/nette/forms/src/Forms/IFormRenderer.php',
        'Nette\\Forms\\ISubmitterControl' => __DIR__ . '/..' . '/nette/forms/src/Forms/ISubmitterControl.php',
        'Nette\\Forms\\Rendering\\DefaultFormRenderer' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rendering/DefaultFormRenderer.php',
        'Nette\\Forms\\Rule' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rule.php',
        'Nette\\Forms\\Rules' => __DIR__ . '/..' . '/nette/forms/src/Forms/Rules.php',
        'Nette\\Forms\\Validator' => __DIR__ . '/..' . '/nette/forms/src/Forms/Validator.php',
        'Nette\\Http\\Context' => __DIR__ . '/..' . '/nette/http/src/Http/Context.php',
        'Nette\\Http\\FileUpload' => __DIR__ . '/..' . '/nette/http/src/Http/FileUpload.php',
        'Nette\\Http\\Helpers' => __DIR__ . '/..' . '/nette/http/src/Http/Helpers.php',
        'Nette\\Http\\IRequest' => __DIR__ . '/..' . '/nette/http/src/Http/IRequest.php',
        'Nette\\Http\\IResponse' => __DIR__ . '/..' . '/nette/http/src/Http/IResponse.php',
        'Nette\\Http\\Request' => __DIR__ . '/..' . '/nette/http/src/Http/Request.php',
        'Nette\\Http\\RequestFactory' => __DIR__ . '/..' . '/nette/http/src/Http/RequestFactory.php',
        'Nette\\Http\\Response' => __DIR__ . '/..' . '/nette/http/src/Http/Response.php',
        'Nette\\Http\\Session' => __DIR__ . '/../..' . '/src/override/vendor/nette/http/src/Http/Session.php',
        'Nette\\Http\\SessionSection' => __DIR__ . '/..' . '/nette/http/src/Http/SessionSection.php',
        'Nette\\Http\\Url' => __DIR__ . '/..' . '/nette/http/src/Http/Url.php',
        'Nette\\Http\\UrlImmutable' => __DIR__ . '/..' . '/nette/http/src/Http/UrlImmutable.php',
        'Nette\\Http\\UrlScript' => __DIR__ . '/..' . '/nette/http/src/Http/UrlScript.php',
        'Nette\\Http\\UserStorage' => __DIR__ . '/..' . '/nette/http/src/Http/UserStorage.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Loaders\\RobotLoader' => __DIR__ . '/..' . '/nette/robot-loader/src/RobotLoader/RobotLoader.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\Mail\\DkimSigner' => __DIR__ . '/..' . '/nette/mail/src/Mail/DkimSigner.php',
        'Nette\\Mail\\FallbackMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/FallbackMailer.php',
        'Nette\\Mail\\FallbackMailerException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\Mailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/Mailer.php',
        'Nette\\Mail\\Message' => __DIR__ . '/..' . '/nette/mail/src/Mail/Message.php',
        'Nette\\Mail\\MimePart' => __DIR__ . '/..' . '/nette/mail/src/Mail/MimePart.php',
        'Nette\\Mail\\SendException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\SendmailMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SendmailMailer.php',
        'Nette\\Mail\\SignException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\Signer' => __DIR__ . '/..' . '/nette/mail/src/Mail/Signer.php',
        'Nette\\Mail\\SmtpException' => __DIR__ . '/..' . '/nette/mail/src/Mail/exceptions.php',
        'Nette\\Mail\\SmtpMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SmtpMailer.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/finder/src/Utils/Finder.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'PHPSecureSession\\Exception\\AuthenticationFailedException' => __DIR__ . '/..' . '/ezimuel/php-secure-session/src/Exception/AuthenticationFailedException.php',
        'PHPSecureSession\\SecureHandler' => __DIR__ . '/..' . '/ezimuel/php-secure-session/src/SecureHandler.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/..' . '/erusev/parsedown-extra/ParsedownExtra.php',
        'ParsedownExtraTest' => __DIR__ . '/..' . '/erusev/parsedown-extra/test/ParsedownExtraTest.php',
        'Plasticbrain\\FlashMessages\\FlashMessages' => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src/FlashMessages.php',
        'Symfony\\Component\\Translation\\Catalogue\\AbstractOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/AbstractOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\MergeOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/MergeOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\OperationInterface' => __DIR__ . '/..' . '/symfony/translation/Catalogue/OperationInterface.php',
        'Symfony\\Component\\Translation\\Catalogue\\TargetOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/TargetOperation.php',
        'Symfony\\Component\\Translation\\Command\\XliffLintCommand' => __DIR__ . '/..' . '/symfony/translation/Command/XliffLintCommand.php',
        'Symfony\\Component\\Translation\\DataCollectorTranslator' => __DIR__ . '/..' . '/symfony/translation/DataCollectorTranslator.php',
        'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector' => __DIR__ . '/..' . '/symfony/translation/DataCollector/TranslationDataCollector.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslationDumperPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslationDumperPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslationExtractorPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslatorPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslatorPathsPass.php',
        'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/CsvFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\DumperInterface' => __DIR__ . '/..' . '/symfony/translation/Dumper/DumperInterface.php',
        'Symfony\\Component\\Translation\\Dumper\\FileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/FileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IcuResFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IniFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IniFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/JsonFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\MoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/MoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PhpFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\QtFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/QtFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/XliffFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/YamlFileDumper.php',
        'Symfony\\Component\\Translation\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/translation/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Translation\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/translation/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Translation\\Exception\\InvalidResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/InvalidResourceException.php',
        'Symfony\\Component\\Translation\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/translation/Exception/LogicException.php',
        'Symfony\\Component\\Translation\\Exception\\NotFoundResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/NotFoundResourceException.php',
        'Symfony\\Component\\Translation\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/translation/Exception/RuntimeException.php',
        'Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/AbstractFileExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ChainExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/ChainExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => __DIR__ . '/..' . '/symfony/translation/Extractor/ExtractorInterface.php',
        'Symfony\\Component\\Translation\\Extractor\\PhpExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/PhpExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\PhpStringTokenParser' => __DIR__ . '/..' . '/symfony/translation/Extractor/PhpStringTokenParser.php',
        'Symfony\\Component\\Translation\\Formatter\\ChoiceMessageFormatterInterface' => __DIR__ . '/..' . '/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php',
        'Symfony\\Component\\Translation\\Formatter\\IntlFormatter' => __DIR__ . '/..' . '/symfony/translation/Formatter/IntlFormatter.php',
        'Symfony\\Component\\Translation\\Formatter\\IntlFormatterInterface' => __DIR__ . '/..' . '/symfony/translation/Formatter/IntlFormatterInterface.php',
        'Symfony\\Component\\Translation\\Formatter\\MessageFormatter' => __DIR__ . '/..' . '/symfony/translation/Formatter/MessageFormatter.php',
        'Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface' => __DIR__ . '/..' . '/symfony/translation/Formatter/MessageFormatterInterface.php',
        'Symfony\\Component\\Translation\\IdentityTranslator' => __DIR__ . '/..' . '/symfony/translation/IdentityTranslator.php',
        'Symfony\\Component\\Translation\\Interval' => __DIR__ . '/..' . '/symfony/translation/Interval.php',
        'Symfony\\Component\\Translation\\Loader\\ArrayLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/ArrayLoader.php',
        'Symfony\\Component\\Translation\\Loader\\CsvFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/CsvFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\FileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/FileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuDatFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuResFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IniFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IniFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\JsonFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/JsonFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/symfony/translation/Loader/LoaderInterface.php',
        'Symfony\\Component\\Translation\\Loader\\MoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/MoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\QtFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/QtFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\XliffFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/XliffFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Translation\\LoggingTranslator' => __DIR__ . '/..' . '/symfony/translation/LoggingTranslator.php',
        'Symfony\\Component\\Translation\\MessageCatalogue' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogue.php',
        'Symfony\\Component\\Translation\\MessageCatalogueInterface' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogueInterface.php',
        'Symfony\\Component\\Translation\\MessageSelector' => __DIR__ . '/..' . '/symfony/translation/MessageSelector.php',
        'Symfony\\Component\\Translation\\MetadataAwareInterface' => __DIR__ . '/..' . '/symfony/translation/MetadataAwareInterface.php',
        'Symfony\\Component\\Translation\\PluralizationRules' => __DIR__ . '/..' . '/symfony/translation/PluralizationRules.php',
        'Symfony\\Component\\Translation\\Reader\\TranslationReader' => __DIR__ . '/..' . '/symfony/translation/Reader/TranslationReader.php',
        'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => __DIR__ . '/..' . '/symfony/translation/Reader/TranslationReaderInterface.php',
        'Symfony\\Component\\Translation\\Translator' => __DIR__ . '/..' . '/symfony/translation/Translator.php',
        'Symfony\\Component\\Translation\\TranslatorBagInterface' => __DIR__ . '/..' . '/symfony/translation/TranslatorBagInterface.php',
        'Symfony\\Component\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/translation/TranslatorInterface.php',
        'Symfony\\Component\\Translation\\Util\\ArrayConverter' => __DIR__ . '/..' . '/symfony/translation/Util/ArrayConverter.php',
        'Symfony\\Component\\Translation\\Util\\XliffUtils' => __DIR__ . '/..' . '/symfony/translation/Util/XliffUtils.php',
        'Symfony\\Component\\Translation\\Writer\\TranslationWriter' => __DIR__ . '/..' . '/symfony/translation/Writer/TranslationWriter.php',
        'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => __DIR__ . '/..' . '/symfony/translation/Writer/TranslationWriterInterface.php',
        'Symfony\\Contracts\\Translation\\LocaleAwareInterface' => __DIR__ . '/..' . '/symfony/translation-contracts/LocaleAwareInterface.php',
        'Symfony\\Contracts\\Translation\\Test\\TranslatorTest' => __DIR__ . '/..' . '/symfony/translation-contracts/Test/TranslatorTest.php',
        'Symfony\\Contracts\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/translation-contracts/TranslatorInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorTrait' => __DIR__ . '/..' . '/symfony/translation-contracts/TranslatorTrait.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'System\\App' => __DIR__ . '/..' . '/nezamy/route/system/App.php',
        'System\\Request' => __DIR__ . '/..' . '/nezamy/route/system/Request.php',
        'System\\Route' => __DIR__ . '/..' . '/nezamy/route/system/Route.php',
        'System\\Support\\Arr' => __DIR__ . '/..' . '/nezamy/support/Arr.php',
        'System\\Support\\Str' => __DIR__ . '/..' . '/nezamy/support/Str.php',
        'Tracy\\Bar' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/Bar.php',
        'Tracy\\BlueScreen' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/BlueScreen/BlueScreen.php',
        'Tracy\\Bridges\\Nette\\Bridge' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/Bridge.php',
        'Tracy\\Bridges\\Nette\\MailSender' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/MailSender.php',
        'Tracy\\Bridges\\Nette\\TracyExtension' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/TracyExtension.php',
        'Tracy\\Bridges\\Psr\\PsrToTracyLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/PsrToTracyLoggerAdapter.php',
        'Tracy\\Bridges\\Psr\\TracyToPsrLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/TracyToPsrLoggerAdapter.php',
        'Tracy\\Debugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/Debugger.php',
        'Tracy\\DefaultBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/DefaultBarPanel.php',
        'Tracy\\Dumper' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Dumper.php',
        'Tracy\\FireLogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/FireLogger.php',
        'Tracy\\Helpers' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Helpers.php',
        'Tracy\\IBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/IBarPanel.php',
        'Tracy\\ILogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/ILogger.php',
        'Tracy\\Logger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/Logger.php',
        'Tracy\\OutputDebugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/OutputDebugger/OutputDebugger.php',
        'geertw\\IpAnonymizer\\IpAnonymizer' => __DIR__ . '/..' . '/geertw/ip-anonymizer/src/IpAnonymizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9327150735d8287c144dc69d98037e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9327150735d8287c144dc69d98037e0::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitf9327150735d8287c144dc69d98037e0::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf9327150735d8287c144dc69d98037e0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf9327150735d8287c144dc69d98037e0::$classMap;

        }, null, ClassLoader::class);
    }
}
