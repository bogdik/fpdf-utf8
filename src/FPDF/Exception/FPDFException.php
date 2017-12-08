<?php

namespace FaimMedia\FPDF\Exception;

use Exception;

class FPDFException extends Exception {

// Invalid unit specified
	const INVALID_UNIT = -1;

// Invalid orientiation specified (must be portrait or landscape)
	const INVALID_ORIENTATION = -2;

// Invalid zoom mode specified
	const INVALID_ZOOM_MODE = -3;

// Invalid layout mode specified
	const INVALID_LAYOUT_MODE = -4;

// Invalid page size is specified
	const INVALID_PAGE_SIZE = -5;

// Invalid font specified
	const UNDEFINED_FONT = -6;

// Unsupported font specified, the font you are trying to use is not loaded
	const UNSUPPORTED_FONT = -7;

// Invalid font file
	const INVALID_FONT_FILE = -8;

// Invalid image was specified, not existing or not readable
	const INVALID_IMAGE = -9;

// Unsupported image was specified
	const UNSUPPORTED_IMAGE = -10;

// Image not writable, probally temp directory not writable
	const IMAGE_NOT_WRITABLE = -11;

// Headers have already been send
	const HEADER_ALREADY_SENT = -12;

// Cache folder is invalid or not writable
	const INVALID_CACHE_FOLDER = -13;

// A required PHP extension is not available
	const EXTENSION_NOT_AVAILABLE = -14;

// Stream could not be readed (completely)
	const INVALID_STREAM = -15;

}