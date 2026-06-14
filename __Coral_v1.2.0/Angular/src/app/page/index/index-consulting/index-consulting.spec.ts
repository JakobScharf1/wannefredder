import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexConsulting } from './index-consulting';

describe('IndexConsulting', () => {
  let component: IndexConsulting;
  let fixture: ComponentFixture<IndexConsulting>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexConsulting]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexConsulting);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
