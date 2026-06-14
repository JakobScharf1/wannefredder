import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogComments } from './blog-comments';

describe('BlogComments', () => {
  let component: BlogComments;
  let fixture: ComponentFixture<BlogComments>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogComments]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogComments);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
