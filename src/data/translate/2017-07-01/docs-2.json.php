<?php
// This file was auto-generated from sdk-root/src/data/translate/2017-07-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Provides translation between English and one of six languages, or between one of the six languages and English.</p>', 'operations' => [ 'TranslateText' => '<p>Translates input text from the source language to the target language. You can translate between English (en) and one of the following languages, or between one of the following languages and English.</p> <ul> <li> <p>Arabic (ar)</p> </li> <li> <p>Chinese (Simplified) (zh)</p> </li> <li> <p>French (fr)</p> </li> <li> <p>German (de)</p> </li> <li> <p>Portuguese (pt)</p> </li> <li> <p>Spanish (es)</p> </li> </ul>', ], 'shapes' => [ 'BoundedLengthString' => [ 'base' => NULL, 'refs' => [ 'TranslateTextRequest$Text' => '<p>The text to translate.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>An internal server error occurred. Retry your request.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is invalid.</p>', 'refs' => [], ], 'LanguageCodeString' => [ 'base' => NULL, 'refs' => [ 'TranslateTextRequest$SourceLanguageCode' => '<p>One of the supported language codes for the source text. If the <code>TargetLanguageCode</code> is not "en", the <code>SourceLanguageCode</code> must be "en".</p>', 'TranslateTextRequest$TargetLanguageCode' => '<p>One of the supported language codes for the target text. If the <code>SourceLanguageCode</code> is not "en", the <code>TargetLanguageCode</code> must be "en".</p>', 'TranslateTextResponse$SourceLanguageCode' => '<p>The language code for the language of the input text. </p>', 'TranslateTextResponse$TargetLanguageCode' => '<p>The language code for the language of the translated text. </p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>Amazon Translate is unavailable. Retry your request later.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'InternalServerException$Message' => NULL, 'InvalidRequestException$Message' => NULL, 'ServiceUnavailableException$Message' => NULL, 'TextSizeLimitExceededException$Message' => NULL, 'TooManyRequestsException$Message' => NULL, 'TranslateTextResponse$TranslatedText' => '<p>The text translated into the target language.</p>', 'UnsupportedLanguagePairException$Message' => NULL, ], ], 'TextSizeLimitExceededException' => [ 'base' => '<p>The size of the input text exceeds the length constraint for the <code>Text</code> field. Try again with a shorter text. </p>', 'refs' => [], ], 'TooManyRequestsException' => [ 'base' => '<p>The number of requests exceeds the limit. Resubmit your request later.</p>', 'refs' => [], ], 'TranslateTextRequest' => [ 'base' => NULL, 'refs' => [], ], 'TranslateTextResponse' => [ 'base' => NULL, 'refs' => [], ], 'UnsupportedLanguagePairException' => [ 'base' => '<p>Amazon Translate cannot translate input text in the source language into this target language. For more information, see <a>how-to-error-msg</a>. </p>', 'refs' => [], ], ],];
