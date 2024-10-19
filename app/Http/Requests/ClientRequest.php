<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|string|max:255', // Имя
            'phone' => 'required|string|max:20', // Телефон
            'email' => 'nullable|email|max:255', // Email
            'message' => 'nullable|string|max:1000', // Сообщение
            'status' => 'nullable|string|in:new,processed,completed', // Статус
            'type' => 'required|string|in:carpet,furniture,mattress', // Тип
            // Carpets
            'carpet_type' => 'nullable|string|max:255', // [ковёр/ ковролин/ ковровое покрытие / шегги / безворсовый ковёр]
            'carpet_size' => 'nullable|string|max:255', // [10х15/ 20х30/ 30х40/ 40х50/ 50х60/ 60х70/ 70х80/ 80х90/ 90х100/ 100х120/ 120х150/ 150х180/ 180х200/ 200х250/ 250х300]
            'carpet_height' => 'nullable|string|max:255', // [низкий/ средний/ высокий] ворс
            'delivery_address' => 'nullable|string|max:255', // [улица/ дом/ корпус/ этаж/ подъезд/ квартира]
            'carpet_additional' => 'nullable|json', // [дополнительные загрязнения/ ковёр с плесенью/ ковёр с плесенью и грибком/ ковёр с плесенью и грибком и плесенью]
            // Furniture
            'furniture_type' => 'nullable|string|max:255', // [диван/ кресло / стул]
            'furniture_size' => 'nullable|string|max:255', // [ малый / средний / большой ]
            'count_of_seats' => 'nullable|integer|min:1|max:3', // [1/2/3] if furniture is a sofa
            'count_of_items' => 'nullable|integer|min:1|max:3', // [1/2/3] if furniture is a chair
            // Mattress
            'mattress_size' => 'nullable|string|max:255', // [90х190/ 120х200]
            'mattress_height' => 'nullable|integer|min:10|max:20', // [10/15/20]
            'mattress_additional' => 'nullable|string|max:255', // [матрас ортопедический/ детский/...]
        ];
    }

    public function messages(): array
    {
        return [
            'company_id.required' => 'ID компании обязателен для заполнения.',
            'company_id.exists' => 'ID компании должен существовать в базе данных.',
            'name.required' => 'Имя обязательно для заполнения.',
            'name.string' => 'Имя должно быть строкой.',
            'name.max' => 'Имя не должно превышать 255 символов.',
            'phone.required' => 'Телефон обязателен для заполнения.',
            'phone.string' => 'Телефон должен быть строкой.',
            'phone.max' => 'Телефон не должен превышать 20 символов.',
            'email.email' => 'Введите корректный адрес электронной почты.',
            'email.max' => 'Электронная почта не должна превышать 255 символов.',
            'message.string' => 'Сообщение должно быть строкой.',
            'message.max' => 'Сообщение не должно превышать 1000 символов.',
            'status.in' => 'Статус должен быть одним из: new, processed, completed.',
            'carpet_type.string' => 'Тип ковра должен быть строкой.',
            'carpet_type.max' => 'Тип ковра не должен превышать 255 символов.',
            'carpet_size.string' => 'Размер ковра должен быть строкой.',
            'carpet_size.max' => 'Размер ковра не должен превышать 255 символов.',
            'carpet_height.string' => 'Высота ковра должна быть строкой.',
            'carpet_height.max' => 'Высота ковра не должна превышать 255 символов.',
            'delivery_address.string' => 'Адрес доставки должен быть строкой.',
            'delivery_address.max' => 'Адрес доставки не должен превышать 255 символов.',
            'carpet_additional.json' => 'Дополнительная информация о ковре должна быть в формате JSON.',
            'furniture_type.string' => 'Тип мебели должен быть строкой.',
            'furniture_type.max' => 'Тип мебели не должен превышать 255 символов.',
            'furniture_size.string' => 'Размер мебели должен быть строкой.',
            'furniture_size.max' => 'Размер мебели не должен превышать 255 символов.',
            'count_of_seats.integer' => 'Количество мест должно быть целым числом.',
            'count_of_seats.min' => 'Количество мест должно быть не менее 1.',
            'count_of_seats.max' => 'Количество мест не должно превышать 3.',
            'count_of_items.integer' => 'Количество предметов должно быть целым числом.',
            'count_of_items.min' => 'Количество предметов должно быть не менее 1.',
            'count_of_items.max' => 'Количество предметов не должно превышать 3.',
            'mattress_size.string' => 'Размер матраса должен быть строкой.',
            'mattress_size.max' => 'Размер матраса не должен превышать 255 символов.',
            'mattress_height.integer' => 'Высота матраса должна быть целым числом.',
            'mattress_height.min' => 'Высота матраса должна быть не менее 10.',
            'mattress_height.max' => 'Высота матраса не должна превышать 20.',
            'mattress_additional.string' => 'Дополнительная информация о матрасе должна быть строкой.',
            'mattress_additional.max' => 'Дополнительная информация о матрасе не должна превышать 255 символов.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
        ], 422));
    }
}
