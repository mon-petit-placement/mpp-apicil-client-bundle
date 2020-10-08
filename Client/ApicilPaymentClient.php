<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\DetailOptionVP;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\EmailPropositionDto;
use Mpp\ApicilClientBundle\Model\ListeDesSupports;
use Mpp\ApicilClientBundle\Model\ModeleDeVersement;
use Mpp\ApicilClientBundle\Model\MontantVCDto;
use Mpp\ApicilClientBundle\Model\OperationEnCoursDto;
use Mpp\ApicilClientBundle\Model\RecuperationActeDocSousCategorieDoc;
use Mpp\ApicilClientBundle\Model\RecuperationVersementSuppression;
use Mpp\ApicilClientBundle\Model\ReponseClientHorsMursDto;
use Mpp\ApicilClientBundle\Model\SuppressionOptionDto;
use Symfony\Component\HttpFoundation\File\File;

class ApicilPaymentClient extends AbstractApicilClientDomain implements ApicilPaymentClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto
    {
        $options = ApicilPaymentClientOptionResolver::resolveAddDocumentOptions($options);

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
    public function approve(int $id)
    {
        $this->requestAndPopulate('POST', sprintf('/%s/valider', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function approveAsOffice(int $id)
    {
        $this->requestAndPopulate('PUT', sprintf('/%s/cabinet/valider', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto
    {
        return $this->requestAndPopulate(ReponseClientHorsMursDto::class, 'POST', '/codesecurite/valider', [
            'query' => ApicilPaymentClientOptionResolver::resolveApproveSecurityCodeOptions($options),
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
        $options = ApicilPaymentClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '/', [
            'query' => $options,
            'multipart' => [
                [
                    'name' => 'dossier',
                    'contents' => fopen($options['dossier'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromModel(ModeleDeVersement $paymentModel)
    {
        $this->request('POST', '/asigner', [
            'body' => $this->serializer->serialize($paymentModel, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function generateSecurityCode(array $options)
    {
        $this->request('POST', '/codesecurite/generer', [
            'query' => ApicilPaymentClientOptionResolver::resolveGenerateSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): RecuperationVersementSuppression
    {
        return $this->requestAndPopulate(RecuperationVersementSuppression::class, 'GET', sprintf('/%s', $id));
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
    public function getContractAmountLimits(int $contractId): MontantVCDto
    {
        return $this->requestAndPopulate(MontantVCDto::class, 'GET', sprintf('/contrat/%s/montantminmax', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getContractOption(int $contractId): DetailOptionVP
    {
        return $this->requestAndPopulate(DetailOptionVP::class, 'GET', sprintf('/contrat/%s/option', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getContractRateLimits(int $contractId): MontantVCDto
    {
        return $this->requestAndPopulate(MontantVCDto::class, 'GET', sprintf('/contrat/%s/tauxminmax', $contractId));
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
    public function getDocument(int $id, string $documentId): RecuperationActeDocSousCategorieDoc
    {
        return $this->requestAndPopulate(RecuperationActeDocSousCategorieDoc::class, 'GET', sprintf('/%s/documents/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuments(int $id): RecuperationActeDocSousCategorieDoc
    {
        return $this->requestAndPopulate(RecuperationActeDocSousCategorieDto::class, 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailTemplate(array $options = []): EmailPropositionActeDto
    {
        return $this->requestAndPopulate(EmailPropositionActeDto::class, 'GET', '/mail/template');
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options = []): ListeDesSupports
    {
        return $this->requestAndPopulate(ListeDesSupports::class, 'GET', sprintf('/support/investissement/%s', $contractId), [
            'query' => ApicilPaymentClientOptionResolver::resolveGetInvestmentEligibleSupportsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): ListeDesSupports
    {
        return $this->requestAndPopulate(ListeDesSupports::class, 'GET', sprintf('/support/investissement/details/%s', $contractId), [
            'query' => ApicilPaymentClientOptionResolver::resolveGetInvestmentEligibleSupportDetailsOptions($options),
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
    public function hasContract(int $contractId, array $options = []): OperationEnCoursDto
    {
        return $this->requestAndPopulate(OperationEnCoursDto::class, 'GET', sprintf('/contrat/%s/existe', $contractId), [
            'query' => ApicilPaymentClientOptionResolver::resolveHasContractOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function isContractEligible(int $contractId, array $options = []): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/contrat/%s/eligible', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function refuse(int $id, array $options = [])
    {
        $this->request('POST', sprintf('/%s/refuser', $id), [
            'query' => ApicilPaymentClientOptionResolver::resolveRefuseOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function refuseAsOffice(int $id)
    {
        $this->request('PUT', sprintf('/%s/cabinet/refuser', $id));
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
    public function removeDocument(int $id, string $documentId)
    {
        $this->request('DELETE', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function removeOption(array $options): ActeRetourCreationDto
    {
        $options = ApicilPaymentClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '/retireroption', [
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
    public function removeOptionFromModel(SuppressionOptionDto $model): ActeRetourCreationDto
    {
        $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '/retireroption/asigner', [
            'body' => $this->serializer->serialize($model, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function restart(int $id, array $options)
    {
        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => ApicilPaymentClientOptionResolver::resolveRestartOptions($options),
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
    public function sendSignatureBySms(int $id)
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $id, EmailPropositionDto $email): bool
    {
        $this->request('POST', sprintf('/%s/transmettre', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function startAsOffice(int $id)
    {
        $this->request('PUT', sprintf('/%s/cabinet/instance', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function testEmail(int $id, EmailPropositionActeDto $email): bool
    {
        $this->request('POST', sprintf('/%s/mail/tester', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromModel(int $id, ModeleDeVersement $paymentModel): ModeleDeVersement
    {
        return $this->requestAndPopulate(ModeleDeVersement::class, 'PUT', sprintf('/asigner/%s', $id), [
            'body' => $this->serializer->serialize($paymentModel, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber): bool
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
                ApicilPaymentClientOptionResolver::resolveVerifySurveysOptions($surveys),
                'json'
            ),
        ])->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/versement';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'payment';
    }
}
