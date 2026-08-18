<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $this->call->view('student/homepage');
    }

    public function profile()
    {
       $student = [
    // Personal Information
    'student_id' => '2024-00233',
    'name' => 'Joana Daniela P. Romualdo',
    'first_name' => 'Joana Daniela',
    'last_name' => 'Romualdo',
    'gender' => 'Female',
    'birthdate' => 'January 15, 2006',
    'age' => '20',
    'civil_status' => 'Single',
    'nationality' => 'Filipino',

    // Academic Information
    'course' => 'BS Information Technology',
    'course_code' => 'BSIT',
    'year' => '3rd Year',
    'section' => '3F5',
    'school' => 'Mindoro State University',
    'campus' => 'Calapan City Campus',
    'college' => 'College of Computer Studies',
    'academic_year' => '2026-2027',
    'semester' => '1st Semester',
    'status' => 'Regular Student',

    // Contact Information
    'email' => 'joana@gmail.com',
    'phone' => '0912-345-6789',
    'address' => 'Calapan City, Oriental Mindoro',

    // Emergency Contact
    'emergency_name' => 'Juan Dela Cruz',
    'emergency_relationship' => 'Parent',
    'emergency_phone' => '0917-123-4567',

    // Skills
    'skills' => [
        'PHP',
        'HTML & CSS',
        'JavaScript',
        'MySQL',
        'Database Management',
        'Web Development',
        'UI/UX Design',
        'Problem Solving',
        'Teamwork',
        'Communication'
    ]
];
        $this->call->view('student/profile', $student);
    }
}