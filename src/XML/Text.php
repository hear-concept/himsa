<?php

namespace HearConcept\HIMSA\XML;

class Text extends HIMSA_XML
{
    /**
     * English version of the text
     *
     * @return string
     */
    public function content(): ?string
    {
        if (!$this->xml->PlainText && !$this->xml->HTMLText)
            return null;

        return ((string) $this->xml->PlainText) ?? $this->xml->HTMLText->asXML();
    }

    /**
     * Content ID used for language translation. Refers to a matching content ID in the Locale Content XSD.
     *
     * @return string|null
     */
    public function contentId(): string|null
    {
        return ((string) $this->xml->PlainText->attributes()['ContentId']) ?? ((string) $this->xml->HTMLText->attributes()['ContentId']) ?? null;
    }

    public function isHTML(): bool
    {
        return !!($this->xml->HTMLText->asXML());
    }

    public function isPlainText(): bool
    {
        return !!((string) $this->xml->PlainText);
    }

    public function __toString(): string
    {
        return $this->content();
    }
}
