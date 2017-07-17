<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['https://emauth.em-lyon.com/adfs/services/trust'] = array (
	'entityid' => 'https://emauth.em-lyon.com/adfs/services/trust',
	'contacts' =>
		array (
			0 =>
				array (
					'contactType' => 'support',
				),
		),
	'metadata-set' => 'saml20-idp-remote',
	'SingleSignOnService' =>
		array (
			0 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
					'Location' => 'https://emauth.em-lyon.com/adfs/ls/',
				),
			1 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
					'Location' => 'https://emauth.em-lyon.com/adfs/ls/',
				),
		),
	'SingleLogoutService' =>
		array (
			0 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
					'Location' => 'https://emauth.em-lyon.com/adfs/ls/',
				),
			1 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
					'Location' => 'https://emauth.em-lyon.com/adfs/ls/',
				),
		),
	'ArtifactResolutionService' =>
		array (
			0 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
					'Location' => 'https://emauth.em-lyon.com/adfs/services/trust/artifactresolution',
					'index' => 0,
				),
		),
	'NameIDFormats' =>
		array (
			0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
			1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
			2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
		),
	'keys' =>
		array (
			0 =>
				array (
					'encryption' => true,
					'signing' => false,
					'type' => 'X509Certificate',
					'X509Certificate' => 'MIIC5jCCAc6gAwIBAgIQJJmgE9rgoo9OxWF6vjQ3rzANBgkqhkiG9w0BAQsFADAvMS0wKwYDVQQDEyRBREZTIEVuY3J5cHRpb24gLSBlbWF1dGguZW0tbHlvbi5jb20wHhcNMTUwNzA5MDkwNTMzWhcNMjUwNzA2MDkwNTMzWjAvMS0wKwYDVQQDEyRBREZTIEVuY3J5cHRpb24gLSBlbWF1dGguZW0tbHlvbi5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCjimNaLzBkmPFQPwwmIzmNIEStSs5U+4Ob3VLQ9XSqc6IrQwalJqGLdhp3aZQH8OJp4cH3w5LTAm4LdDAhgYkJgQSYI5qEEgXuV0MqSPa/AZiOoelmSe/DZ6c3tSeza2eX1wSbE5vh3w0W65ivJfCpsP4T5UTvULIuE+I5UgZBcdggvs4JYoTM4KjZjtkDqTJ+bBQAWwQ82JP2Fe2Rk0PEFP22V7J/fFpR0yFrOXYoYlh8KZC/VDQ+2YVqIrOP51UIYwbG64HjHMdhCl76ih+GiTGn5b5hnKZnQ+26HLScMPhoJ0aQH+rdQL/uBKtf13KFZMLYIaScaUmbowypqN2TAgMBAAEwDQYJKoZIhvcNAQELBQADggEBABcmXonOtapZG0p5pE+rsTG+vpsc4lrpJfSdTq17co8ie491YJ4byQE94/ZcaeEzVDX6Ki5PSZ5/1OxqxjNNdtJxUE9sClYx81GIJybEgKTGQuGWimZ95UdDxJUVUxieUm3lL1DzXArPFQOnK0qeA+LLZl2hwA6NGGYJ+nPhysNI0iulKYFSJz+ZVHtfLtycONkub3wv/QF22V+chaSHyrHp3MubU2Or9FAS2bv0arfjDvV3prhf3g7IXuuTnahrhdi4o3g1OLgc5Q2ddpxN9ocXYR93rbupiB7zYPSOyHO0AS44qtq+Ar3S+sKFOtKjgHRx6SnUZkRnG6mfJ7peJyE=',
				),
			1 =>
				array (
					'encryption' => false,
					'signing' => true,
					'type' => 'X509Certificate',
					'X509Certificate' => 'MIIC4DCCAcigAwIBAgIQEwu0sxeCE6JPjh2t3n+DFDANBgkqhkiG9w0BAQsFADAsMSowKAYDVQQDEyFBREZTIFNpZ25pbmcgLSBlbWF1dGguZW0tbHlvbi5jb20wHhcNMTUwNzA5MDkwNTM1WhcNMjUwNzA2MDkwNTM1WjAsMSowKAYDVQQDEyFBREZTIFNpZ25pbmcgLSBlbWF1dGguZW0tbHlvbi5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDBd50sSAu5DpU68twGcd0WAkP1BZ0N7ZRT+EGifbMLMRu5AO/Ruoi+NKBT0h32KuY7fsdlo4lKsn35Q9V8XsgxiRJghwMCA5l4kNQXxAelZDpbJy9xNHtM9dcib/l8RFVWRQPOnu4LKwXmvzhB6pp0M1wrV9A2wYd01ot8KGsb5b2nbIm77abroaHQU+payLzV2fs57Gkuji+GMvuNxiBxYTqfIzMxm+tlu7BKCoDgZGr6zcuY3Ex+yMCld9gZoY5HFwbVyvYhNZ+QthIQWZApAEn0xzNNpYDRcCU/pb+upgZFB1CmmvEs6PsyfKYzCEGozxZfkWDrllL6+pU4h5BvAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAGZh/IPgS1FID8b2h/Vfh5jKR15zpIqYEm9bGtQh+AkCFNG8xwPrrzAec2hPuftuLpgsp7nOHeCHQIYDGrILLnwaESOnAzVxluLS87AjYWrE9qRkHxlT3czsgoCObeh6GVnqnJzXBlOZhI1b7Xqva5b1izi4hnm+cpRF3RPXaQJbLqZA+7BfkV8lYdtu/KCXitHxbYnfW9jOPDAm633wKPo32m7o5Qjtc1cxs9usOtfuc546CXjdrLMX+1S8/6qWreZkr0qR31E9dxV+gbkDXtPTtGt2bVqiVYH+rXtMPu4ffDaoGRH+zA+3UxEP4XrksZj/SYUgn4CKynD2THM8xAw=',
				),
		),
);
