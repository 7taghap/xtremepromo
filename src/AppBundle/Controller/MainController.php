<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Client;
use AppBundle\Services\GlobeApi;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use AppBundle\Services\GlobeRequest;
use AppBundle\Services\GlobeResponse;

class MainController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function homepageAction()
	{
		return $this->render('default/index.html.twig');
	}
	
	/**
	 * @Route("/sms",name="sms_action")
	 */
	public function smsAction(Request $request)
	{
		
		$code = $request->query->get('code');
// 		$client   = $this->get('guzzle.client');
// 		print_r($client);
		$globe = $this->container->get('globe_api');
		$restClient = $this->container->get('ci.restclient');
	

		$url = "http://developer.globelabs.com.ph/oauth/access_token";
		$payload = array('app_id'=>GlobeApi::APPID, 'app_secret'=>GlobeApi::SECRET_KEY,'code'=>$code);

		$response = $restClient->post(GlobeApi::GLOBE_ACCESS_TOKEN_URL, json_encode($payload));
		
		$encoder = new JsonEncoder();
		$normalizer = new GetSetMethodNormalizer();
// 		$normalizer->setIgnoredAttributes(array('smsMessage'));
		$normalizer->setCamelizedAttributes(array('access_token','subscriber_number'));
		
		$serializer = new Serializer(array($normalizer), array($encoder));

		
		$globeResponse = $serializer->deserialize($response->getContent(), 'AppBundle\Services\GlobeResponse', 'json');
		

		return new Response("Hello world ". $globeResponse->getAccessToken());
	}
}