<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ConnaissanceClientProjet;
use Mpp\ApicilClientBundle\Model\EmailPropositionSouscriptionDto;
use Mpp\ApicilClientBundle\Model\ListDocumentDto;
use Mpp\ApicilClientBundle\Model\ProjetInvestissement;
use Mpp\ApicilClientBundle\Model\ProjetInvestissementRetour;
use Mpp\ApicilClientBundle\Model\ReponseProjetDto;
use Symfony\Component\HttpFoundation\File\File;

interface ApicilProjectClientInterface
{
    /**
     * Valid the security code for a project.
     *
     * @method approveSignature
     *
     * @param int    $id
     * @param string $otp
     */
    public function approveSignature(int $id, string $otp);

    /**
     * Create a new project.
     *
     * @method create
     *
     * @param array $options
     *
     * @return ReponseProjetDto
     */
    public function create(array $options): ReponseProjetDto;

    /**
     * [createFromDraft description].
     *
     * @method createFromCustomerKnowledge
     *
     * @param ConnaissanceClientProjet $projectCustomerKnowledge
     *
     * @return ReponseProjetDto
     */
    public function createFromCustomerKnowledge(ConnaissanceClientProjet $projectCustomerKnowledge): ReponseProjetDto;

    /**
     * Create a project without attaching documents.
     *
     * @method createFromInvestmentProject
     *
     * @param ProjetInvestissement $project
     *
     * @return ReponseProjetDto
     */
    public function createFromInvestmentProject(ProjetInvestissement $project): ReponseProjetDto;

    /**
     * Retreive project.
     *
     * @method get
     *
     * @param int $id
     *
     * @return ProjetInvestissementRetour
     */
    public function get(int $id): ProjetInvestissementRetour;

    /**
     * Retrieve the project bulletin.
     *
     * @method getBulletin
     *
     * @param int $id
     *
     * @return File
     */
    public function getBulletin(int $id): File;

    /**
     * Retrieve project documents.
     *
     * @method getDocuments
     *
     * @param int   $id
     * @param array $options
     *
     * @return ListDocumentDto
     */
    public function getDocuments(int $id, array $options = []): ListDocumentDto;

    /**
     * Remove the project.
     *
     * @method remove
     *
     * @param int $id
     */
    public function remove(int $id);

    /**
     * Send the signature to the customer by email.
     *
     * @method sendSignatureByEmail
     *
     * @param int $id
     */
    public function sendSignatureByEmail(int $id);

    /**
     * Send the signature to the customer by sms.
     *
     * @method sendSignatureBySms
     *
     * @param int $id
     */
    public function sendSignatureBySms(int $id);

    /**
     * Send the project to the customer.
     *
     * @method sendToCustomer
     *
     * @param int                             $id
     * @param EmailPropositionSouscriptionDto $email
     */
    public function sendToCustomer(int $id, EmailPropositionSouscriptionDto $email);

    /**
     * Attach new document to the project.
     *
     * @method update
     *
     * @param int   $id
     * @param array $options
     *
     * @return ReponseProjetDto
     */
    public function update(int $id, array $options): ReponseProjetDto;
}
