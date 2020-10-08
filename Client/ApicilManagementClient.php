<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\ContratProfilGestionDto;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDto;
use Mpp\ApicilClientBundle\Model\RecuperationContratProfileGestionDto;
use Mpp\ApicilClientBundle\Model\ReponseClientHorsMursDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilManagementClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilManagementClient extends AbstractApicilClientDomain implements ApicilManagementClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto
    {
        $options = ApicilManagementClientOptionResolver::resolveAddDocumentOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/document/%s', $id, $category), [
            'multipart' => [
                [
                    'name' => 'document',
                    'contents' => fopen($options['document'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto
    {
        return $this->requestAndPopulate(ReponseClientHorsMursDto::class, 'POST', '/codesecurite/valider', [
            'query' => ApicilManagementClientOptionResolver::resolveApproveSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSignature(int $id, string $otp)
    {
        $this->request('POST', sprintf('/%s/signature/%s', $id, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options): ActeRetourCreationDto
    {
        $options = ApicilManagementClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '', [
            'query' => $options,
            'multipart' => [
                [
                    'name' => 'bulletin',
                    'contents' => fopen($options['bulletin'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromModel(ContratProfilGestionDto $gestionProfile): ActeRetourCreation
    {
        return $this->requestAndPopulate(ActeRetourCreation::class, 'POST', '/asigner', [
            'body' => $this->serializer->serialize($gestionProfile, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function generateSecurityCode(array $options)
    {
        $this->request('POST', '/codesecurite/generer', [
            'query' => ApicilManagementClientOptionResolver::resolveGenerateSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): RecuperationContratProfileGestionDto
    {
        return $this->requestAndPopulate(RecuperationContratProfileGestionDto::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getBulletin(int $id): File
    {
        return $this->download('GET', sprintf('/%s/bulletin', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getByContract(int $contractId): ContratProfilGestionDto
    {
        return $this->requestAndPopulate(ContratProfilGestionDto::class, 'GET', sprintf('/contrat/%s', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getContractDocument(string $code, int $contractId): File
    {
        return $this->download('GET', sprintf('/%s/contrat/%s/doc-changement', $code, $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentByCategory(int $id, string $category): File
    {
        return $this->download('GET', sprintf('/%s/document/%s', $id, $category));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id): RecuperationActeDocSousCategorieDto
    {
        return $this->requestAndPopulate(RecuperationActeDocSousCategorieDto::class, 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailTemplate(): EmailPropositionActeDto
    {
        return $this->requestAndPopulate(EmailPropositionActeDto::class, 'GET', '/mail/template');
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options = []): ListeDesSupports
    {
        return $this->requestAndPopulate(ListeDesSupports::class, 'GET', sprintf('/support/investissement/%s', $contractId), [
            'query' => ApicilManagementClientOptionResolver::resolveGetInvestmentEligibleSupportsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): ListeDesSupports
    {
        return $this->requestAndPopulate(ListeDesSupports::class, 'GET', sprintf('/support/investissement/details/%s', $contractId), [
            'query' => ApicilManagementClientOptionResolver::resolveGetInvestmentEligibleSupportDetailsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function giveUp(int $id)
    {
        $this->request('POST', sprintf('/%s/abandonner', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function hasContract(int $contractId): OperationEnCoursDto
    {
        return $this->requestAndPopulate(OperationEnCoursDto::class, 'GET', sprintf('/contrat/%s/existe', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function isContractEligible(int $contractId): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/contrat/%s/eligible', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function refuse(int $id, array $options = [])
    {
        $this->request('POST', sprintf('/%s/refuser', $id), [
            'query' => ApicilManagementClientOptionResolver::resolveRefuseOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(int $id): bool
    {
        return $this->requestAndPopulate('bool', 'DELETE', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function restart(int $id, array $options)
    {
        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => ApicilManagementClientOptionResolver::resolveRestartOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function resume(int $id): ActeRetourCreationDto
    {
        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/reprendre', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function removeDocument(int $id, string $documentId)
    {
        $this->request('DELETE', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email)
    {
        $this->request('POST', sprintf('/%s/transmettre', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySms(int $id)
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function testEmail(int $id, EmailPropositionActeDto $email)
    {
        $this->request('POST', sprintf('/%s/mail/tester', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $id, array $options): ActeRetourCreationDto
    {
        $options = ApicilManagementClientOptionResolver::resolveUpdateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '', [
            'multipart' => [
                [
                    'name' => 'bulletin',
                    'contents' => fopen($options['bulletin'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromModel(int $id, ContratProfilGestionDto $gestionProfile): ActeRetourCreationDto
    {
        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/asigner', $id), [
            'body' => $this->serializer->serialize($gestionProfile, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber)
    {
        $this->request('PUT', sprintf('/%s/telephone', $id), [
            'body' => $this->serializer->serialize($phoneNumber, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function verifySurveys(int $id, array $surveys): int
    {
        return $this->request('POST', sprintf('/%s/questionnaires', $id), [
            'body' => $this->serializer->serialize(
                ApicilManagementClientOptionResolver::resolveVerifySurveysOptions($surveys),
                'json'
            ),
        ])->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/modegestion';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'management';
    }
}
