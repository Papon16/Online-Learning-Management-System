<?php
Course::create([
    'title' => $request->title,
    'description' => $request->description,
    'teacher_id' => auth()->id(),
    'status' => 'pending'
]);