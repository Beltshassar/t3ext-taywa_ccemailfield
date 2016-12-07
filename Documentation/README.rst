======================================
Add ccEmailField to postProcessor of the sysext Form (TYPO3 V 7 LTS)
======================================

What does it do?
========================

This extension takes the content a field and uses this content (an e-mail address) when sending the form as CC address.

To do this MailPostProcessor.php of form is extended, see here: https://github.com/TYPO3-CMS/form/blob/master/Classes/PostProcess/MailPostProcessor.php

German:

Diese Erweiterung nimmt den Inhalt ein Feldes und nutz diesen Inhalt (eine E-Mail Adresse) beim Versenden des Formulars als CC Adresse. Damit erhält der Absender des Formulars eine Kopie.



Example of a Configuration as Form Content
============================================


method = post
prefix = tx_form
confirmation = 0
postProcessor {
    1 = mail
    1 {
        ccEmailField = email
        recipientEmail = noise@taywa.ch
        senderEmail = noise@taywa.ch
        subject = Test of ccEmailField
        messages {
            success = TEXT
            success {
                value = <p>See you</p>
            }
        }
    }
}
10 {
    type = email
    name = email
    placeholder = Email
    required = required
    label {
        value = Email
    }
}
20 = SUBMIT
20 {
    type = submit
    name = submit
    value = Submit
}


Link to Extension Repository
========================
https://typo3.org/extensions/repository/view/taywa_ccemailfield

========================
This is the extended class:
https://github.com/TYPO3-CMS/form/blob/master/Classes/PostProcess/MailPostProcessor.php

Discussions around this:

- https://stackoverflow.com/questions/29074323/typo3-tx-form-copy-to-sender-recipient-copy
- https://forge.typo3.org/issues/32950
- https://forge.typo3.org/issues/68771


Typo3 specific:

- https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/Xclasses/Index.html
- https://somethingphp.com/extending-classes-typo3/
- http://insight.helhum.io/post/130876393595/how-to-configure-class-loading-for-extensions-in



Tested in TYPO3 7 LTS only
========================
I tested this in TYPO3 7 LTS, not in TYPO3 8

History
========================
v 0.0.1: initial version

Licence
========================
Public Domain

Author
========================
Fabian Thommen, ft@taywa.ch, taywa gmbh, Zürich, 2016

Tools
================================================

zip this extension for upload to extension repro on typo3.org

    zip -r ../taywa_ccemailfield_0.0.1.zip *
