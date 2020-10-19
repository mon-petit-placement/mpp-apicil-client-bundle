<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ConnaissanceClientProjet;
use Mpp\ApicilClientBundle\Model\EmailPropositionSouscriptionDto;
use Mpp\ApicilClientBundle\Model\ListDocumentDto;
use Mpp\ApicilClientBundle\Model\ProjetInvestissement;
use Mpp\ApicilClientBundle\Model\ProjetInvestissementRetour;
use Mpp\ApicilClientBundle\Model\ReponseProjetDto;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class ApicilProjectClient extends AbstractApicilClientDomain implements ApicilProjectClientInterface
{
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
    public function create(array $options): ReponseProjetDto
    {
        $options = ApicilProjectClientOptionResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ReponseProjetDto::class, 'POST', '/', [
            'query' => ['projet' => $options['projet']],
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($options['file'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromCustomerKnowledge(ConnaissanceClientProjet $projectCustomerKnowledge): ReponseProjetDto
    {
        return $this->requestAndPopulate(ReponseProjetDto::class, 'POST', '/connaissanceclient', [
            'body' => $this->serializer->serialize($projectCustomerKnowledge, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromInvestmentProject(ProjetInvestissement $project): ReponseProjetDto
    {
        return $this->requestAndPopulate(ReponseProjetDto::class, 'POST', '/asigner', [
            'body' => $this->serializer->serialize($project, 'json', [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): ProjetInvestissementRetour
    {
        return $this->requestAndPopulate(ProjetInvestissementRetour::class, 'GET', sprintf('/%s', $id));
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
    public function getDocuments(int $id, array $options = []): ListDocumentDto
    {
        return $this->requestAndPopulate(ListDocumentDto::class, 'GET', sprintf('/%s/documents', $id), [
            'query' => ApicilProjectClientOptionResolver::resolveGetDocumentsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(int $id)
    {
        $this->request('DELETE', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureByEmail(int $id)
    {
        $this->request('GET', sprintf('/%s/signature/mail', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySms(int $id)
    {
        $this->request('GET', sprintf('/%s/signature/sms', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $id, EmailPropositionSouscriptionDto $email)
    {
        $this->request('POST', sprintf('/transmettre/%s', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $id, array $options): ReponseProjetDto
    {
        $options = ApicilProjectClientOptionResolver::resolveUpdateOptions($options);

        return $this->requestAndPopulate(ReponseProjetDto::class, 'PUT', sprintf('/%s', $id), [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($options['file'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/projet';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'project';
    }
}
