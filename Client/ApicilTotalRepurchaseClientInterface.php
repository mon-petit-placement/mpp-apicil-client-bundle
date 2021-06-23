<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeDocumentDto;
use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\RachatPartielDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilTotalRepurchaseClientInterface
{
    /**
     * Attach a new document to a partial repurchase request.
     *
     * @method addDocument
     *
     * @param int    $id
     * @param string $category
     * @param array  $query
     *
     * @return ActeRetourCreationDto
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

    /**
     * Create a new total repurchase request.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ActeRetourCreationDto
     */
    public function create(array $options): ActeRetourCreationDto;

    /**
     * Retrieve a total repurchase request.
     *
     * @method get
     *
     * @param int $id
     *
     * @return RachatPartielDtoDeConsultation
     */
    public function get(int $id): RachatPartielDtoDeConsultation;

    /**
     * Retrieve total repurchase bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve total repurchase document.
     *
     * @method getDocumentByCategory
     *
     * @param int $id
     * @param string $category
     *
     * @return RecuperationActeDocSousCategorieDto
     */
    public function getDocumentByCategory(int $id, string $category): RecuperationActeDocSousCategorieDto;

    /**
     * Retrieve total repurchase document.
     *
     * @method getDocumentById
     *
     * @param int $id
     * @param int $documentId
     *
     * @return File
     */
    public function getDocumentById(int $id, int $documentId): File;

    /**
     * Retrieve total repurchase documents.
     *
     * @method getDocuments
     *
     * @param int $id
     *
     * @return array
     */
    public function getDocuments(int $id): array;

    /**
     * Give up a total repurchase request.
     *
     * @method giveUp
     *
     * @param int $id
     */
    public function giveUp(int $id);

    /**
     * Refuse a total repurchase request.
     *
     * @method refuse
     *
     * @param int $id
     */
    public function refuse(int $id, array $options = []);

    /**
     * Remove total repurchase request.
     *
     * @method remove
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * Remove total repurchase request.
     *
     * @method removeDocument
     *
     * @param int $id
     * @param int $documentId
     *
     * @return bool
     */
    public function removeDocument(int $id, int $documentId): bool;

    /**
     * Restart a total repurchase request.
     *
     * @method restart
     *
     * @param int   $id
     * @param array $options
     *
     * @return bool
     */
    public function restart(int $id, array $options);

    /**
     * Test transmission email of a total repurchase request.
     *
     * @method testEmail
     *
     * @param int                     $id
     * @param EmailPropositionActeDto $email
     */
    public function testEmail(int $id, EmailPropositionActeDto $email);
}
