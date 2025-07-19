<?php
$session_data = null;
// Using nullsafe operator to access a method or property on an object that might be null
// If $session_data is null, the expression will evaluate to null instead of throwing an error
// This is useful for avoiding null reference errors in a clean way
$result = $session_data?->get("key") ?? "default_value";

// 2. Example of using nullsafe operator with a method call
// If $session_data is null, the method call will not be executed
// If $session_data is not null, it will call the get method with 'key' as an argument
// Example of using nullsafe operator with a property access
// If $session_data is null, the property access will not be executed
// If $session_data is not null, it will access the property 'property_name'
$property_value = $session_data?->property_name ?? "default_value";

// 3. Example of using nullsafe operator with a method call and chaining
// If $session_data is null, the method call will not be executed
// If $session_data is not null, it will call the get method and then access
// the property 'property_name'
$chained_value = $session_data?->get("key")?->property_name ?? "default_value"; // If get
