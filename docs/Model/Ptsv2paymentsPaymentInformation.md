# Ptsv2paymentsPaymentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationCard**](Ptsv2paymentsPaymentInformationCard.md) |  | [optional] 
**tokenizedCard** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationTokenizedCard**](Ptsv2paymentsPaymentInformationTokenizedCard.md) |  | [optional] 
**fluidData** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationFluidData**](Ptsv2paymentsPaymentInformationFluidData.md) |  | [optional] 
**customer** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer**](Ptsv2paymentsPaymentInformationCustomer.md) |  | [optional] 
**paymentInstrument** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentInstrument**](Ptsv2paymentsPaymentInformationPaymentInstrument.md) |  | [optional] 
**instrumentIdentifier** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationInstrumentIdentifier**](Ptsv2paymentsPaymentInformationInstrumentIdentifier.md) |  | [optional] 
**shippingAddress** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationShippingAddress**](Ptsv2paymentsPaymentInformationShippingAddress.md) |  | [optional] 
**legacyToken** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationLegacyToken**](Ptsv2paymentsPaymentInformationLegacyToken.md) |  | [optional] 
**bank** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationBank**](Ptsv2paymentsPaymentInformationBank.md) |  | [optional] 
**paymentType** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentType**](Ptsv2paymentsPaymentInformationPaymentType.md) |  | [optional] 
**initiationChannel** | **string** | Mastercard-defined code that indicates how the account information was obtained.  - &#x60;00&#x60;: Card - &#x60;01&#x60;: Mobile Network Operator (MNO) controlled removable secure element (SIM or UICC) personalized for use with a mobile phone or smartphone - &#x60;02&#x60;: Key fob - &#x60;03&#x60;: Watch using a contactless chip or a fixed (non-removable) secure element not controlled by the MNO - &#x60;04&#x60;: Mobile tag - &#x60;05&#x60;: Wristband - &#x60;06&#x60;: Mobile phone case or sleeve - &#x60;07&#x60;: Mobile phone or smartphone with a fixed (non-removable) secure element controlled by the MNO,for example, code division multiple access (CDMA) - &#x60;08&#x60;: Removable secure element not controlled by the MNO, for example, memory card personalized forused with a mobile phone or smartphone - &#x60;09&#x60;: Mobile Phone or smartphone with a fixed (non-removable) secure element not controlled by the MNO - &#x60;10&#x60;: MNO controlled removable secure element (SIM or UICC) personalized for use with a tablet or e-book - &#x60;11&#x60;: Tablet or e-book with a fixed (non-removable) secure element controlled by the MNO - &#x60;12&#x60;: Removable secure element not controlled by the MNO, for example, memory card personalized foruse with a tablet or e-book - &#x60;13&#x60;: Tablet or e-book with fixed (non-removable) secure element not controlled by the MNO - &#x60;14&#x60;: Mobile phone or smartphone with a payment application running in a host processor - &#x60;15&#x60;: Tablet or e-book with a payment application running in a host processor - &#x60;16&#x60;: Mobile phone or smartphone with a payment application running in the Trusted ExecutionEnvironment (TEE) of a host processor - &#x60;17&#x60;: Tablet or e-book with a payment application running in the TEE of a host processor - &#x60;18&#x60;: Watch with a payment application running in the TEE of a host processor - &#x60;19&#x60;: Watch with a payment application running in a host processor  Values from 20–99 exclusively indicate the form factor only without also indicating the storage technology  - &#x60;20&#x60;: Card - &#x60;21&#x60;: Phone e.g. Mobile Phone - &#x60;22&#x60;: Tablet/e-reader - &#x60;23&#x60;: Watch/Wristband e.g. Watch or wristband, including a fitness band, smart strap, disposable band, watch add-on, and security/ID band - &#x60;24&#x60;: Sticker - &#x60;25&#x60;: PC - &#x60;26&#x60;: Device Peripheral e.g. mobile phone case or sleeve - &#x60;27&#x60;: Tag e.g. key fob or mobile tag - &#x60;28&#x60;: Jewelry e.g. ring, bracelet, necklace and cuff links - &#x60;29&#x60;: Fashion Accessory e.g. handbag, bag charm and glasses - &#x60;30&#x60;: Garment e.g. dress - &#x60;31&#x60;: Domestic Appliance e.g refrigerator, washing machine - &#x60;32&#x60;: Vehicle e.g. vehicle, including vehicle attached devices - &#x60;33&#x60;: Media/Gaming Device e.g. media or gaming device, including a set top box, media player and television  34–99 are reserved for future form factors. Any value in this range may occur within form factor and transaction data without prior notice.  This field is supported only for Mastercard on CyberSource through VisaNet. When initiation channel is not provided via this API field, the value is extracted from EMV tag 9F6E for Mastercard transactions. To enable this feature please call support.  #### Used by **Authorization** Optional field. | [optional] 
**eWallet** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationEWallet**](Ptsv2paymentsPaymentInformationEWallet.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

