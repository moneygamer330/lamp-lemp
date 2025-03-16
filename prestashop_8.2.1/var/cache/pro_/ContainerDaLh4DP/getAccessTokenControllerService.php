<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCnaAzSZy9mvOnN'."\n".'lwYNso3J8h14ORX/4ORdwbg2m13Ji9pZ+KEmbRSNdbzhjlBG/NdSvs5CQKrOfG1h'."\n".'+cGp5M7T1nLJKbXlJY7d3wLCZZezZMfPi0S66ZRiufE+kNjGQMOrT7d3+ZtyoWfq'."\n".'iF3wsxtIQKsx6bgSuuoNI99dhwLgBDXNTXOv9fQGM5zlWryXpxUZAb+rD4XmkAxL'."\n".'OP3DtFBV8y5Xtl00yx0SVx9H3UYEj8aqo0WnuBFdri+O046Htcp3wX9VdUqigJ8L'."\n".'uN+jeFSh721qncIzbWqako4yz42bYeBHgRyH2bFiR+BCUotYAH4D25gN2tX3s+4w'."\n".'2Q4Hd5zxAgMBAAECggEABW5tf7w9OC0lUkg7OBb3Z/ULok61gU6RpjOT7MH2xY8H'."\n".'U8Tf7fGFzvmiD04zr1FCfK19XxOpSbH/3AOzYMta769NByxhObN8X+6IJhhk9xBs'."\n".'NauoHGmEk5KYFRk0Dp7uYkNfuYbPCvBEQSJxFs8+0ZCB5WiMHPUfb8ieoCfnrq7S'."\n".'2jR0a9/Mms+4ji87SmlhBBZxslclUjzjQEDLu0/60Wyer5pUZoi6E5V9f6VYZIQJ'."\n".'Vst3JHxOGWdygBi/NHNHpA7ojSldmuJv56KASGC3tNxWGl2fRvTackiqT/IEhWap'."\n".'/tjZdHqNrJiJ+Fb30YxZWwupy5sUg7hx90/MVadFKQKBgQDNWPiE3TNflXmWXSug'."\n".'a0j2YvtHH6R+msxvuQoAw4KFvMoi4oEMY6N38qnfcEFlbQJFwlnRXDu9Gcv8kT4r'."\n".'lJ/lrmi5LeiSUk17wv2OOg3RxavYElrca3WN8IoraBCO7yTaMxAff5ieJT/kSAWH'."\n".'TTxas4pMz+ctb+DHJjZNcGWvOQKBgQDQszj13fcw50yI++GoSeJ9lpTOe++WLno0'."\n".'pWa/ySR07AgEe6w3vt/N+zagwDICG/u+rng0xBwvx5Z17R1QYnXBEWszozFYrC2l'."\n".'HTB0Xd93lCp2/s8c/nKHTQwkStq115ghw9BXhs0HXH1McWGeq6WnYyhQD4S6TFLA'."\n".'VOoKQQsjeQKBgEG8nbJK7ctHmqjcIr80GSNnBHH8Wzh8bb3GSsF71SjjCwKn6BAD'."\n".'Ra18bY0t7oF9qCCU2xP+ptEelQLBrFlfNuDcOIIvhChzWIKqJWmGhC4HTb/aAGRX'."\n".'skZCHrlOkx5uyClh92NeAYl++zklJT/vJccTes6kL6mICzk1rmST+rlhAoGBAMu8'."\n".'SnzrJWdeRX7stcw95JdJqxcwMiHgWXiPh5DuYWKrEOCfgu4grgc9mISxW6BnhQkO'."\n".'9VY9pG6YXy/cPGO+2smRoZ+VTpUL8LthlW3kPkVUJWhpM/NQCqo+8v1y/bPLNj6w'."\n".'E/F+LSVkiwVXIj9tvZd821vc6mucGqSbwKYl/SOxAoGASb9/0sRbtlNrPmEjTmt6'."\n".'Do4B52RhyWcG5XnpxQsY6Ww4lDj364sTt2PpKaQ3BdHqHIiT1ZHxCydFtSVRNM0E'."\n".'Eo80VJIrDD16IcReDcRyRSw9zCKUmFxGiO71QWsS24+2TfwaAP+q02cJqYXb1Nm7'."\n".'BMhNurX70saG+VzPbX6tdGM='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000744f94e210f993bb7efb4cb2b38f42cb1bf9e7280d6c8065227858be019593723dc018eda15c1564e106413e0c92d5f3d7ad351a93d00febd34577715b3945fd');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
